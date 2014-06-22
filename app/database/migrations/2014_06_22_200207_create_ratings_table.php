<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		user_id
		file_id
		rating
		rating_id ?
		timestamp
		*/
		Schema::create('ratings', function ($table) {
			$table->integer('user_id')->foreign()->references('id')->on('users');
			$table->integer('file_id')->foreign()->references('id')->on('files');
			$table->primary(['user_id', 'file_id']);
			$table->unique(['user_id', 'file_id']);
			$table->integer('rating');
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
		Schema::drop('ratings');
	}

}
