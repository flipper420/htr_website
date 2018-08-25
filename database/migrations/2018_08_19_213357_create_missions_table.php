<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('mission_categories')->onDelete('cascade');
            $table->string('name')->unique();
            $table->text('description');
            $table->enum('level', ['easy', 'normal', 'medium', 'hard', 'expert', 'insane']);
            $table->string('img_url');
            $table->string('slug');
            $table->unsignedInteger('reward')->default(100);
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}