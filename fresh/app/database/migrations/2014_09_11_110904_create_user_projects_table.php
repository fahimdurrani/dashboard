<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_projects', function($table){
			$table->increments('id');
			$table->string('name', 30);
			$table->string('cover_photo', 30);
			$table->text('data');
			$table->boolean('published');
			$table->integer('user_id');
			$table->integer('video_id');
			$table->string('unique_id', 50);
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
		Schema::drop('user_projects');
	}

}
