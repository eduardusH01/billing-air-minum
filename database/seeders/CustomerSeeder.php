<?php

namespace Database\Seeders;
use App\Models\Customer;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'nama' => 'Spongebob',
            'alamat' => 'Bikini Bottom',
            'Id_kelurahan' => '123',
            'Id_kecamatan' => '123',
            'Id_kabupaten' => '123',
            'Id_provinsi' => '123',
            'Nik' => '5434323114332223',
            'Kode_pos' => '12345',
            'Id_user' => '3'
        ]);
        Customer::create(        [
            'nama' => 'Patrick',
            'alamat' => 'Bikini Bottom',
            'Id_kelurahan' => '123',
            'Id_kecamatan' => '123',
            'Id_kabupaten' => '123',
            'Id_provinsi' => '123',
            'Nik' => '5434323114332223',
            'Kode_pos' => '12345',
            'Id_user' => '2'
        ]);
    }
}
