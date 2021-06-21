<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->date('Tahun_bulan');
            $table->date('Tanggal_bayar');
            $table->bigInteger('Jml_bayar');
            $table->foreignId('Id_user_operator')->constrained('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('Id_pelanggan')->constrained('pelanggan')
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
        Schema::dropIfExists('pembayaran');
    }
}
