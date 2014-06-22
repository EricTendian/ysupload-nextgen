<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		id
		slug
		file_path_local
		file_path_s3
		md5_hash
		title
		description
		category
		uploader
		topic_id (null)
		thumbnail - foreign key to another file (nullable)

		*/
		Schema::create('files', function ($table) {
			$table->bigIncrements('id');
			$table->string('file_path_local');
			$table->string('file_path_s3')->nullable();
			$table->string('md5_hash');
			$table->string('slug');
			$table->string('title')->nullable();
			$table->text('description')->nullable();
			$table->enum('category', array('addon', 'program', 'screenshot', 'video', 'replay', 'misc'));
			$table->integer('uploader')->foreign()->references('id')->on('users');
			$table->integer('thumbnail')->foreign()->references('id')->on('files')->nullable();
			$table->integer('topic_id')->nullable();
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
		Schema::drop('files');
	}

}
