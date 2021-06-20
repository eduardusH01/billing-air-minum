<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Id_customer')->constrained('customer')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('nomor_pelanggan');
            $table->string('no_rumah', 20);
            $table->text('Alamat_titik_langganan');
            $table->integer('Id_kabupaten');
            $table->integer('Id_provinsi');
            $table->string('Nik', 16);
            $table->string('Kode_pos', 5);
            $table->unsignedBigInteger('Id_jenis_langganan');
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->timestamps();
            $table->foreign('Id_jenis_langganan')->references('id')->on('ref_jenis_langganan')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
