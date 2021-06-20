<?php

namespace Database\Seeders;

use App\Models\Tagihan;
use Illuminate\Database\Seeder;

class TagihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tagihan::create([
            'Id_pelanggan' => '1', 
            'Tahun_bulan' => '01-04-2021', 
            'Meteran_bulan_lalu' => '22', 
            'Meteran_bulan_sekarang' => '21', 
            'Tarif_dasar' => '5000', 
            'Id_jenis_langganan' => '1', 
            'Id_user_operator' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin'
        ]);
        Tagihan::create([
            'Id_pelanggan' => '1', 
            'Tahun_bulan' => '01-05-2021', 
            'Meteran_bulan_lalu' => '21', 
            'Meteran_bulan_sekarang' => '25', 
            'Tarif_dasar' => '5000', 
            'Id_jenis_langganan' => '1', 
            'Id_user_operator' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin'
        ]);
    }
}
