<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        $data = DB::table('users')
       ->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
       ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
       ->select('roles.name as role', 'users.id', 'users.email', 'users.name')
        ->get();
        return view('user.users')->with('users', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            'user' => $this->User->detailData($id),
        ];
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
        ];

        $this->User->editData($id, $data);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->delete();
        return redirect()->back();
    }
}
