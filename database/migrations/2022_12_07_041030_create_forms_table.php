<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); 
            $table->string('email');
            $table->string('nis');
            $table->string('rombel');
            $table->string('rayon');
            $table->string('saksi');
            $table->date('tanggal_pinjam');
            $table->string('keterangan');
            $table->boolean('status');
            $table->date('done_time')->nullable();
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
        Schema::dropIfExists('forms');
    }
};
