<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMylibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mylibrary', function (Blueprint $table) {
            $table->id();
           
            $table->string('book_name');
            $table->string('category')-> nullable();
            $table->string('author_name')-> nullable();
            $table->string('year')-> nullable();
            $table->text('addition')-> nullable();
            $table->string('book');
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
        Schema::dropIfExists('mylibrary');
    }
}
