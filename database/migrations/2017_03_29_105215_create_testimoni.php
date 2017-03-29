<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimoni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_path');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('isi_testimoni');
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
        Schema::dropIfExists('testimoni');
    }
}
