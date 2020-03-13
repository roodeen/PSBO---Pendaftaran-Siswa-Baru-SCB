<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHartaMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harta_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_datarumah')->unsigned();//fk id_datarumah
            $table->string('nama_harta'); //nama harta tidak bergerak e.g: Sawah
            $table->string('status_kepemilikan');//status kepemilikan harta e.g: milik sendiri
            
            //foreign key
            $table->foreign('id_datarumah')->references('id')->on('data_rumahs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harta_masters');
    }
}