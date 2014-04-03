<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('account_id');
			$table->string('title');
			$table->string('uri');
			$table->string('method');
			$table->string('content_type');
			$table->string('config_path');
			$table->string('config_method');
			$table->string('config_content_type');

			$table->unique(array('account_id', 'uri', 'method', 'content_type'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resources');
	}

}
