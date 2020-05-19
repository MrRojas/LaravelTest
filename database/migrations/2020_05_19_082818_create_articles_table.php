<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name' , 255)->default(' ');
            $table->string('img' , 255)->default('https://cdn4.iconfinder.com/data/icons/signicon-pt-1-1/100/064_-_user-512.png');

            $table->unsignedBigInteger('id_categories');
            $table->foreign('id_categories')->references('id')->on('categories');
            $table->string('status' , 1)->default('1');

            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
