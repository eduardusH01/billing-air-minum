<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Customer;
use App\Models\Tagihan;
use App\Models\User;
use App\Models\ref_jenis_langganan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->Customer = new Customer();
        $this->User = new User();
        $this->Pelanggan = new Pelanggan();
        $this->Tagihan = new Tagihan();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home');
    }

    public function transaksi()
    {
        return view('home');
    }
}
