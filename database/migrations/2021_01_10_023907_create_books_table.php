<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //ชื􀀔อหนังสือ
            $table->decimal('price',10,2); //ราคา
            $table->unsignedBigInteger('typebooks_id');
            $table->foreign('typebooks_id')->references('id')->on('typebooks');
            $table->string('image'); //เก็บชื􀀔อภาพหนังสือ
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
        Schema::dropIfExists('books');
    }
}
