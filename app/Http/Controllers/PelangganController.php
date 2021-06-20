<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Customer;
use App\Models\User;
use App\Models\ref_jenis_langganan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->Customer = new Customer();
        $this->Pelanggan = new Pelanggan();
        $this->User = new User();
    }
    public function index()
    {
        $pelanggan = Pelanggan::all();
        $customer = Customer::all();
        $jenis_langganan = ref_jenis_langganan::all();
        return view('pelanggan.listPelanggan', ['customers' => $customer, 'pelanggan' => $pelanggan, 'jenis_langganan' => $jenis_langganan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $jenis_langganan = ref_jenis_langganan::all();
        return view('pelanggan.create', ['customers' => $customers, 'jenis_langganan' => $jenis_langganan]);
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
            'alamat' => 'required',
            'Id_kabupaten' => 'required',
            'Id_provinsi' => 'required',
            'nomor_pelanggan' => 'required',
            'nomor_rumah' => 'required',
            'Kode_pos' => 'required'
        ]);

        $customer = $this->Customer->detailData($request->id_customer);

        $data = [
            'Id_customer' => $request->id_customer,
            'no_rumah' => $request->nomor_rumah,
            'Alamat_titik_langganan' => $request->alamat,
            'Id_kabupaten' => $request->Id_kabupaten,
            'Id_provinsi' => $request->Id_provinsi,
            'Id_jenis_langganan' => $request->Id_jenis_langganan,
            'nomor_pelanggan' => $request->nomor_pelanggan,
            'Nik' => $customer->Nik,
            'created_by' => 'Admin',
            'updated_by' => 'Admin',
            'Kode_pos' => $request->Kode_pos
        ];

        $this->Pelanggan->addData($data);

        return redirect('/admin/pelanggan');
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
        $pelanggan = $this->Pelanggan->detailData($id);
        $jenis_langganan = ref_jenis_langganan::all();
        $data = [
            'pelanggan' => $pelanggan,
            'customer' => $this->Customer->detailData($pelanggan->Id_customer),
            'jenis_langganan' => $jenis_langganan
        ];
        return view('pelanggan.edit', $data);
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
            'alamat' => 'required',
            'Id_kabupaten' => 'required',
            'Id_provinsi' => 'required',
            'nomor_pelanggan' => 'required',
            'nomor_rumah' => 'required',
            'Kode_pos' => 'required'
        ]);

        $data = [
            'no_rumah' => $request->nomor_rumah,
            'Alamat_titik_langganan' => $request->alamat,
            'Id_kabupaten' => $request->Id_kabupaten,
            'Id_provinsi' => $request->Id_provinsi,
            'Id_jenis_langganan' => $request->Id_jenis_langganan,
            'nomor_pelanggan' => $request->nomor_pelanggan,
            'Kode_pos' => $request->Kode_pos
        ];

        $this->Pelanggan->editData($id, $data);

        return redirect('/admin/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Pelanggan::where('Id',$id)->delete();
        return redirect()->back();
    }
}
