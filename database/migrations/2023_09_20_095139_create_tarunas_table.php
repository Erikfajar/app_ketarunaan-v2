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
        Schema::create('taruna', function (Blueprint $table) {
            $table->id();
            $table->integer('nit')->unique();
            $table->string('nama');
            $table->string('jurusan');
            $table->enum('tingkat', ['satu', 'dua','tiga']);
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
        Schema::dropIfExists('taruna');
    }
};
