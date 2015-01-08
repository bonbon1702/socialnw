<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Post', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('image_url')->nullable();
			$table->string('image_url_editor')->nullable();
			$table->string('image_url_resize')->nullable();
			$table->string('caption')->nullable();
			$table->string('liked_count')->nullable();
			$table->string('liked_count_month')->nullable();
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
		Schema::drop('Post');
	}

}
