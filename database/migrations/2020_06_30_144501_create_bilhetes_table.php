<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilhetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilhetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sessao');
            $table->foreign('sessao')->references('id')->on('sessãos')->onDelete('cascade');
            $table->integer('preco');
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
        Schema::dropIfExists('bilhetes');
    }
}
