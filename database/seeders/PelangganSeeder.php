<?php

namespace Database\Seeders;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggan::create([
            'id' => '1',
            'Id_customer' => '1',
            'nomor_pelanggan' => '112112',
            'no_rumah' => '123',
            'Alamat_titik_langganan' => 'bikini bottom',
            'Id_kabupaten' => '123',
            'Id_provinsi' => '123',
            'Nik' => '5434323114332223',
            'Kode_pos' => '12345',
            'Id_jenis_langganan' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin'
        ]);
        Pelanggan::create([
            'id' => '2',
            'Id_customer' => '1',
            'nomor_pelanggan' => '221221',
            'no_rumah' => '789',
            'Alamat_titik_langganan' => 'lombok tengah',
            'Id_kabupaten' => '567',
            'Id_provinsi' => '567',
            'Nik' => '5434323114332223',
            'Kode_pos' => '34567',
            'Id_jenis_langganan' => '2',
            'created_by' => 'Admin',
            'updated_by' => 'Admin'
        ]);
    }
}
