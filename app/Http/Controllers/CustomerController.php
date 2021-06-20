<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller
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
     }

    public function index()
    {
        $customer = Customer::all();
        return view('customer.customers', ['customers' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = [
            'user' => $this->User->detailData($id),
        ];
        return view('customer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        Request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'Id_kelurahan' => 'required',
            'Id_kecamatan' => 'required',
            'Id_kabupaten' => 'required',
            'Id_provinsi' => 'required',
            'Nik' => 'required',
            'Kode_pos' => 'required'
        ]);

        $user = $this->User->detailData($id);

        $data = [
            'nama' => $user->name,
            'alamat' => Request()->alamat,
            'Id_kelurahan' => Request()->Id_kelurahan,
            'Id_kecamatan' => Request()->Id_kecamatan,
            'Id_kabupaten' => Request()->Id_kabupaten,
            'Id_provinsi' => Request()->Id_provinsi,
            'Id_user' => Request()->Id_user,
            'Nik' => Request()->Nik,
            'Kode_pos' => Request()->Kode_pos
        ];

        $this->Customer->addData($data);

        return redirect('/admin/customers');
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
        $data = [
            'customer' => $this->Customer->detailData($id),
        ];
        return view('customer.edit', $data);
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
        Request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'Id_kelurahan' => 'required',
            'Id_kecamatan' => 'required',
            'Id_kabupaten' => 'required',
            'Id_provinsi' => 'required',
            'Nik' => 'required',
            'Kode_pos' => 'required'
        ]);

        $Id_user = $this->Customer->detailData($id);

        $data = [
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'Id_kelurahan' => Request()->Id_kelurahan,
            'Id_kecamatan' => Request()->Id_kecamatan,
            'Id_kabupaten' => Request()->Id_kabupaten,
            'Id_provinsi' => Request()->Id_provinsi,
            'Id_user' => $Id_user->Id_user,
            'Nik' => Request()->Nik,
            'Kode_pos' => Request()->Kode_pos
        ];

        $this->Customer->editData($id, $data);

        return redirect('/admin/customers');
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
