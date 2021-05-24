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
Route::middleware('role:admin')->get('/admin', 'AdminController@index')->name('dashboard');

Route::middleware('role:admin')->resource('admin/users', 'UserController');
Route::middleware('role:admin')->get('admin/customers', 'CustomerController@index')->name('customers.index');
Route::middleware('role:admin')->get('/admin/customers/create', 'CustomerController@create');
Route::middleware('role:admin')->post('/admin/customers/store', 'CustomerController@store')->name('customers.store');
Route::middleware('role:admin')->get('/admin/customers/delete/{customer}', 'CustomerController@delete');
