<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		download_id
		user_id
		file_id
		timestamp
		from_ip
		referrer
		*/
		Schema::create('downloads', function ($table) {
			$table->bigIncrements('id');
			$table->integer('user_id')->foreign()->references('id')->on('users');
			$table->integer('file_id')->foreign()->references('id')->on('files');
			$table->string('from_ip')->nullable();
			$table->string('referrer')->nullable();
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
		Schema::drop('downloads');
	}

}
