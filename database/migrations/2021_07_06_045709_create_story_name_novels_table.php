<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoryNameNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_name_novels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('novel_id');
            $table->foreign('novel_id')->references('id')->on('novels')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('story_name_id');
            $table->foreign('story_name_id')->references('id')->on('story_names')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('story_name_novels');
    }
}
