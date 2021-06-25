<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Customer;
use App\Models\Tagihan;
use App\Models\User;
use App\Models\ref_jenis_langganan;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->Customer = new Customer();
        $this->User = new User();
        $this->Pelanggan = new Pelanggan();
        $this->Tagihan = new Tagihan();
        $this->Jenis_langganan = new ref_jenis_langganan();
    }

    public function index()
    {
        $data = DB::table('tagihan')
       ->join('ref_jenis_langganan', 'ref_jenis_langganan.id', '=', 'tagihan.Id_jenis_langganan')
       ->join('pelanggan', 'pelanggan.Id', '=', 'tagihan.Id_pelanggan')
       ->join('customer', 'customer.Id', '=', 'pelanggan.Id_customer')
       ->select('tagihan.id' ,'tagihan.Tahun_bulan', 'tagihan.Meteran_bulan_lalu', 'tagihan.Meteran_bulan_sekarang', 'tagihan.Tarif_dasar', 'ref_jenis_langganan.nama', 'customer.nama as customer')
       ->get();
        return view('tagihan.listTagihan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $customer = Customer::all();
        $jenis_langganan = ref_jenis_langganan::all();
        return view('tagihan.create', ['customers' => $customer, 'pelanggan' => $pelanggan, 'jenis_langganan' => $jenis_langganan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tahun_bulan' => 'required',
            'Meteran_bulan_lalu' => 'required',
            'Meteran_bulan_sekarang' => 'required',
        ]);

        $pelanggan = $this->Pelanggan->detailData($request->id_pelanggan);
        $jenis = $this->Jenis_langganan->detailData($pelanggan->Id_jenis_langganan);
        // $customer = $this->Customer->detailData($pelanggan->Id_customer);

        $data = [
            'Id_pelanggan' => $request->id_pelanggan,
            'Tahun_bulan' => $request->Tahun_bulan,
            'Meteran_bulan_lalu' => $request->Meteran_bulan_lalu,
            'Meteran_bulan_sekarang' => $request->Meteran_bulan_sekarang,
            'Id_jenis_langganan' => $pelanggan->Id_jenis_langganan,
            'Tarif_dasar' => $jenis->Tarif_dasar_satuan,
            'Id_user_operator' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin',
        ];

        $this->Tagihan->addData($data);

        return redirect('/admin/tagihan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tagihan = $this->Tagihan->detailData($id);
        $jenis_langganan = ref_jenis_langganan::all();
        $pelanggan = $this->Pelanggan->detailData($tagihan->Id_pelanggan);
        $customer = $this->Customer->detailData($pelanggan->Id_customer);
        $data = [
            'pelanggan' => $pelanggan,
            'tagihan' => $tagihan,
            'customer' => $customer,
            'jenis_langganan' => $jenis_langganan
        ];
        return view('tagihan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Tahun_bulan' => 'required',
            'Meteran_bulan_lalu' => 'required',
            'Meteran_bulan_sekarang' => 'required',
        ]);

        $pelanggan = $this->Pelanggan->detailData($request->id_pelanggan);
        // $customer = $this->Customer->detailData($pelanggan->Id_customer);

        $data = [
            'Tahun_bulan' => $request->Tahun_bulan,
            'Meteran_bulan_lalu' => $request->Meteran_bulan_lalu,
            'Meteran_bulan_sekarang' => $request->Meteran_bulan_sekarang,
        ];

        $this->Tagihan->editData($id, $data);

        return redirect('/admin/tagihan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tagihan::where('Id',$id)->delete();
        return redirect()->back();
    }
}
