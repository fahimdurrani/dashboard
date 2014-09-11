<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_videos', function($table){
			$table->increments('id');
			$table->string('name', 60);
			$table->string('poster_image', 255);
			$table->string('ogg_format', 255);
			$table->string('mp4_format', 255);
			$table->text('description');
			$table->integer('user_id');
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
		Schema::drop('user_videos');
	}

}
