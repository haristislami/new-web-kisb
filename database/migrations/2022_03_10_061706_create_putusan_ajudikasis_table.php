<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePutusanAjudikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putusan_ajudikasis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_putusan');
            $table->date('tanggal');
            $table->string('registrasi_sengketa');
            $table->string('pemohon');
            $table->string('termohon');
            $table->string('file');
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
        Schema::dropIfExists('putusan_ajudikasis');
    }
}
