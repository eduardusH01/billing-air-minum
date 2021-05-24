<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.customers')->with('customers', $customer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'Id_kelurahan' => 'required',
            'Id_kecamatan' => 'required',
            'Id_kabupaten' => 'required',
            'Id_provinsi' => 'required',
            'Nik' => 'required',
            'Kode_pos' => 'required'
        ]);

        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'Id_kelurahan' => $request->Id_kelurahan,
            'Id_kecamatan' => $request->Id_kecamatan,
            'Id_kabupaten' => $request->Id_kabupaten,
            'Id_provinsi' => $request->Id_provinsi,
            'Nik' => $request->Nik,
            'Kode_pos' => $request->Kode_pos
        ]);

        return redirect()->back();
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

    public function delete($id){
        $customer = Customer::where('Id',$id)->delete();
        return redirect()->back();
    }
}
