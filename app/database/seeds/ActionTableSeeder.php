<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ActionTableSeeder extends Seeder {

	public function run()
	{
		Action::create(array(
			'title' => 'Index',
			'path' => '',
			'method' => 'GET',
			'content_type' => 'text/html',
			'resource_id' => 1,
			'config_path' => '/index',
			'config_method' => 'HEAD',
			'config_content_type' => 'application/json',
		));

		Action::create(array(
			'title' => 'Create',
			'path' => '/create',
			'method' => 'GET',
			'content_type' => 'application/json',
			'resource_id' => 1,
		));
	}

}