<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    protected $table = 'tagihan';
    protected $fillable = [
        'Id_pelanggan', 
        'Tahun_bulan', 
        'Meteran_bulan_lalu', 
        'Meteran_bulan_sekarang', 
        'Tarif_dasar', 
        'Id_jenis_langganan', 
        'Id_user_operator',
        'created_by',
        'updated_by'
    ];

    public function addData($data){
        Tagihan::create($data);
    }

    public function detailData($id){
        return Tagihan::where('id', $id)->first();
    }

    public function editData($id, $data){
        return Tagihan::where('id', $id)->update($data);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function jenisLangganan()
    {
        return $this->hasOne(ref_jenis_langganan::class, 'Id_jenis_langganan');
    }
}
