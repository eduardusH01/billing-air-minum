<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use App\Models\Customer;
use App\Models\Tagihan;
use App\Models\User;
use App\Models\ref_jenis_langganan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
        $customer = Customer::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('users')
       ->join('customer', 'customer.Id_user', '=', 'users.id')
       ->join('pelanggan', 'pelanggan.Id_customer', '=', 'customer.Id')
       ->join('tagihan', 'tagihan.Id_pelanggan', '=', 'pelanggan.id')
       ->select('tagihan.Tahun_bulan', 'tagihan.Meteran_bulan_lalu', 'tagihan.Meteran_bulan_sekarang', 'tagihan.Tarif_dasar', 'tagihan.Id_jenis_langganan')
       ->where('users.id', Auth::user()->id)->get();

       $jenis_langganan = ref_jenis_langganan::all();

       return view('home', ['data' => $data, 'jenis_langganan' => $jenis_langganan]);
       return $data->dd();
    }

    public function transaksi()
    {
        // return view('home');
    }
}
