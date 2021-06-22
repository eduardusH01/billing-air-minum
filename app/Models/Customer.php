<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = "customer";

    protected $fillable = [
        'nama',
        'alamat',
        'Id_kelurahan',
        'Id_user',
        'Id_kecamatan',
        'Id_kabupaten',
        'Id_provinsi',
        'Nik',
        'Kode_pos'
    ];

    public function addData($data){
        Customer::create($data);
    }

    public function detailData($id){
        return DB::table('customer')->where('id', $id)->first();
    }

    public function editData($id, $data){
        return DB::table('customer')->where('id', $id)->update($data);
    }

    public function listPelanggan()
    {
        return $this->hasMany(Pelanggan::class, 'Id_customer');
    }
}
