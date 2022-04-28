<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petanis', function (Blueprint $table) {
            $table->id('PetaniID');
            $table->foreignID('kelompokID');
            $table->string('namaPetani');
            $table->string('asal');
            $table->string('alamat');
            $table->double('NIK');
            $table->string('foto');
            $table->string('kelompokName');
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
        Schema::dropIfExists('petanis');
    }
}