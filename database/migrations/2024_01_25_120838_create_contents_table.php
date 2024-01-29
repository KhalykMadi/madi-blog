<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('category_ru');
            $table->text('title_ru');
            $table->text('description_ru');
            $table->string('category_kz');
            $table->text('title_kz');
            $table->text('description_kz');
            $table->string('category_en');
            $table->text('title_en');
            $table->text('description_en');
            $table->string('img');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
