<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->id();
           
            $table->string('book_name');
            $table->string('category')-> nullable();
            $table->string('author_name');
            $table->string('year');
            $table->text('addition')-> nullable();
            $table->string('about_book');
            $table->string('book_preview');
            $table->string('book');
            $table->string('book_image');
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
        Schema::dropIfExists('ebooks');
    }
}
