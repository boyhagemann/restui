<?php

class ResourceTableSeeder extends Seeder {

	public function run()
	{
		Resource::create(array(
			'id' => 1,
			'account_id' => 1,
			'title' => 'Test resource',
		));
	}

}