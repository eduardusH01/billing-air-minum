<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Id_pelanggan')->constrained('pelanggan')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->date('Tahun_bulan');
            $table->double('Meteran_bulan_lalu', 12, 2);
            $table->double('Meteran_bulan_sekarang', 12, 2);
            $table->foreignId('Id_jenis_langganan')->constrained('ref_jenis_langganan')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('Tarif_dasar');
            $table->foreignId('Id_user_operator')->constrained('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihan');
    }
}
