<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mission_categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->text('description');
			$table->string('slug');
		});

		Schema::create('library_categories', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->text('description');
			$table->string('slug');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('mission_categories');
		Schema::dropIfExists('library_categories');
	}
}