<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nilai');
            $table->unsignedBigInteger('data_pelajar_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->foreign('data_pelajar_id')->references('id')->on('data_pelajars')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('nilais');
    }
}
