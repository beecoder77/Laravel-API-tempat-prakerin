<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExcelToMysql extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dudis', function (Blueprint $table) {
           $table->increments('id');
           $table->string('perusahaan')->nullable();
           $table->string('kota')->nullable();
           $table->string('alamat')->nullable();
           $table->string('email')->nullable();
           $table->string('cp')->nullable();
           $table->string('jabatan')->nullable();
           $table->string('kontak')->nullable();
           $table->string('kuota')->nullable();
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
        Schema::drop("dudis");
    }
}
