<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('Id');
            $table->string('nama', 30);
            $table->text('alamat');
            $table->integer('Id_kelurahan');
            $table->integer('Id_kecamatan');
            $table->integer('Id_kabupaten');
            $table->integer('Id_provinsi');
            $table->string('Nik', 16);
            $table->string('Kode_pos', 5);
            $table->foreignId('Id_user')->constrained('users')
                ->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('customer');
    }
}
