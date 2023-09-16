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
        Schema::create('tingkat_dua', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->nullable();
            $table->string('nama')->nullable();
            $table->string('jurusan')->nullable();
            $table->enum('tipe', ['pelanggaran', 'prestasi']);
            $table->string('prestasi')->nullable();
            $table->bigInteger('pasal_id')->nullable();
            $table->date('tgl')->nullable();
            $table->string('poto')->nullable();
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
        Schema::dropIfExists('tingkat_dua');
    }
};
