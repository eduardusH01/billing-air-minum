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
            'Tahun_bulan' => '2021-04-01', 
            'Meteran_bulan_lalu' => '22', 
            'Meteran_bulan_sekarang' => '30', 
            'Tarif_dasar' => '8000', 
            'Id_jenis_langganan' => '1', 
            'Id_user_operator' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin'
        ]);
        Tagihan::create([
            'Id_pelanggan' => '2', 
            'Tahun_bulan' => '2021-05-01', 
            'Meteran_bulan_lalu' => '30', 
            'Meteran_bulan_sekarang' => '50', 
            'Tarif_dasar' => '8000', 
            'Id_jenis_langganan' => '1', 
            'Id_user_operator' => '1',
            'created_by' => 'Admin',
            'updated_by' => 'Admin'
        ]);
    }
}
