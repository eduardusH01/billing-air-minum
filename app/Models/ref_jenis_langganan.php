<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_jenis_langganan extends Model
{
    use HasFactory;
    protected $table = 'ref_jenis_langganan';

    protected $fillable = [
        'nama', 
        'Batas_bawah', 
        'Tarif_dasar_satuan', 
    ];

    public function addData($data){
        ref_jenis_langganan::create($data);
    }

    public function detailData($id){
        return ref_jenis_langganan::where('id', $id)->first();
    }

    public function editData($id, $data){
        return ref_jenis_langganan::where('id', $id)->update($data);
    }
}
