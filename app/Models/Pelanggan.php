<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'Pelanggan';
    protected $fillable = [
        'created_by',
        'updated_by',
        'Alamat_titik_langganan', 
        'Id_customer', 
        'nomor_pelanggan', 
        'no_rumah', 
        'Id_kabupaten', 
        'Id_provinsi', 
        'Id_jenis_langganan', 
        'nomor_pelanggan', 
        'Nik', 
        'Kode_pos'
    ];

    public function addData($data){
        Pelanggan::create($data);
    }

    public function detailData($id){
        return Pelanggan::where('id', $id)->first();
    }

    public function editData($id, $data){
        return Pelanggan::where('id', $id)->update($data);
    }

    public function listTagihan()
    {
        return $this->hasMany(Tagihan::class, 'Id_pelanggan');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Id_customer');
    }
}
