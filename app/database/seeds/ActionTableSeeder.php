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
			'resource_id' => 1,
		));

		Action::create(array(
			'title' => 'Create',
			'path' => '/create',
			'method' => 'GET',
			'resource_id' => 1,
		));
	}

}