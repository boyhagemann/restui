<?php

class ResourceTableSeeder extends Seeder {

	public function run()
	{
		Resource::create(array(
			'id' => 1,
			'account_id' => 1,
			'title' => 'Resource Index',
			'uri' => 'http://localhost/restui/public/resource',
			'method' => 'GET',
		));

		Resource::create(array(
			'id' => 2,
			'account_id' => 1,
			'title' => 'Resource Create',
			'uri' => 'http://localhost/restui/public/resource/create',
			'method' => 'GET',
		));

		Resource::create(array(
			'id' => 3,
			'account_id' => 1,
			'title' => 'Test layout',
			'uri' => 'http://localhost/restui/public/viewresource/testview',
			'method' => 'POST',
		));
	}

}