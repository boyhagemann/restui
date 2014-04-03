<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWidgetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('widgets', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('account_id');
			$table->string('title');
			$table->string('name');
			$table->integer('view_resource_id')->nullable();
			$table->integer('data_resource_id')->nullable();

			$table->unique(array('account_id', 'name'));
			$table->index('data_resource_id');
			$table->index('view_resource_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('widgets');
	}

}
