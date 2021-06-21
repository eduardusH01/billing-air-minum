<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Customer;
use App\Models\Tagihan;
use App\Models\User;
use App\Models\ref_jenis_langganan;

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
    }

    public function index()
    {
        $pelanggan = Pelanggan::all();
        $customer = Customer::all();
        $jenis_langganan = ref_jenis_langganan::all();
        $tagihan = Tagihan::all();
        return view('tagihan.listTagihan', [
            'customer' => $customer, 
            'pelanggan' => $pelanggan, 
            'tagihan' => $tagihan, 
            'jenis_langganan' => $jenis_langganan
        ]);
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
            'Tarif_dasar' => 'required',
        ]);

        $pelanggan = $this->Pelanggan->detailData($request->id_pelanggan);
        // $customer = $this->Customer->detailData($pelanggan->Id_customer);

        $data = [
            'Id_pelanggan' => $request->id_pelanggan,
            'Tahun_bulan' => $request->Tahun_bulan,
            'Meteran_bulan_lalu' => $request->Meteran_bulan_lalu,
            'Meteran_bulan_sekarang' => $request->Meteran_bulan_sekarang,
            'Id_jenis_langganan' => $pelanggan->Id_jenis_langganan,
            'Tarif_dasar' => $request->Tarif_dasar,
            'Id_user_operator' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin',
        ];

        $this->Tagihan->addData($data);

        return $pelanggan->Id_jenis_langganan;
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
        //
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
        //
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
