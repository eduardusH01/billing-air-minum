<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:user')->get('/pengguna', 'HomeController@index')->name('home');
Route::middleware('role:user')->get('/pengguna/transaksi', 'HomeController@transaksi')->name('transaksi');

Route::middleware('role:admin')->get('/admin', 'AdminController@index')->name('dashboard');

Route::middleware('role:admin')->get('admin/users', 'UserController@index')->name('users.index');
Route::middleware('role:admin')->get('/admin/users/delete/{id}', 'UserController@destroy');
Route::middleware('role:admin')->get('/admin/users/edit/{id}', 'UserController@edit');
Route::middleware('role:admin')->post('/admin/users/update/{id}', 'UserController@update');

Route::middleware('role:admin')->get('admin/customers', 'CustomerController@index')->name('customers.index');
Route::middleware('role:admin')->get('/admin/customers/create/{id}', 'CustomerController@create');
Route::middleware('role:admin')->post('/admin/customers/store/{id}', 'CustomerController@store')->name('customers.store');
Route::middleware('role:admin')->get('/admin/customers/delete/{id}', 'CustomerController@delete');
Route::middleware('role:admin')->get('/admin/customers/edit/{id}', 'CustomerController@edit');
Route::middleware('role:admin')->post('/admin/customers/update/{id}', 'CustomerController@update');

Route::middleware('role:admin')->get('/admin/pelanggan', 'PelangganController@index')->name('pelanggan.index');
Route::middleware('role:admin')->get('/admin/pelanggan/create', 'PelangganController@create');
Route::middleware('role:admin')->post('/admin/pelanggan/store', 'PelangganController@store');
Route::middleware('role:admin')->get('/admin/pelanggan/edit/{id}', 'PelangganController@edit');
Route::middleware('role:admin')->post('/admin/pelanggan/update/{id}', 'PelangganController@update');
Route::middleware('role:admin')->get('/admin/pelanggan/delete/{id}', 'PelangganController@destroy');

Route::middleware('role:admin')->get('/admin/tagihan', 'TagihanController@index')->name('tagihan.index');
Route::middleware('role:admin')->get('/admin/tagihan/create', 'TagihanController@create');
Route::middleware('role:admin')->post('/admin/tagihan/store', 'TagihanController@store');
Route::middleware('role:admin')->get('/admin/tagihan/edit/{id}', 'TagihanController@edit');
Route::middleware('role:admin')->post('/admin/tagihan/update/{id}', 'TagihanController@update');
Route::middleware('role:admin')->get('/admin/tagihan/delete/{id}', 'TagihanController@destroy');

Route::middleware('role:admin')->get('/admin/langganan', 'JenisLanggananController@index')->name('tagihan.index');
Route::middleware('role:admin')->get('/admin/langganan/create', 'JenisLanggananController@create');
Route::middleware('role:admin')->post('/admin/langganan/store', 'JenisLanggananController@store');
Route::middleware('role:admin')->get('/admin/langganan/edit/{id}', 'JenisLanggananController@edit');
Route::middleware('role:admin')->post('/admin/langganan/update/{id}', 'JenisLanggananController@update');
Route::middleware('role:admin')->get('/admin/langganan/delete/{id}', 'JenisLanggananController@destroy');