<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("no_ktp");
            $table->string("email");
            $table->integer("umur");
            $table->string("jenis_kelamin");
            $table->string("alamat");
            $table->string("tujuan_kunjungan");
            $table->string("foto");
            $table->string("status");
            $table->time("jam");
            $table->date("tanggal");
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
        Schema::dropIfExists('tamus');
    }
}
