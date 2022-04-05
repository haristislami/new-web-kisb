<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('judulslug')->unique();
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('pemohon');
            $table->string('termohon');
            $table->string('nomor_register');
            $table->text('majelis');
            $table->string('panitera');
            $table->string('ruangan');
            $table->string('mediator');
            $table->string('agenda');
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('jadwals');
    }
}
