<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpasi', function (Blueprint $table) {

            $table->increments('id');
            $table->char('nama', 30);
            $table->integer('age');
            $table->text('bahan');
            $table->text('kandungan');
            $table->text('manfaat');
            $table->text('prosedur');
            $table->text('durasi');
            $table->text('waktu');
            $table->char('kategori', 20);
            $table->char('gambar', 255);
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
        Schema::dropIfExists('mpasi');
    }
}
