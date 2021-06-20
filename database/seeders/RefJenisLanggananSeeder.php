<?php

namespace Database\Seeders;
use App\Models\ref_jenis_langganan;

use Illuminate\Database\Seeder;

class RefJenisLanggananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ref_jenis_langganan::create([
            'id' => '1',
            'nama' => 'air mineral',
            'Batas_bawah' => '123',
            'Tarif_dasar_satuan' => '123',
        ]);
        ref_jenis_langganan::create([
            'id' => '2',
            'nama' => 'air PDAM',
            'Batas_bawah' => '321',
            'Tarif_dasar_satuan' => '321',
        ]);
    }
}
