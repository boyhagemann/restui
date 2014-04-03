<?php

class PageTableSeeder extends Seeder {

	public function run()
	{
		Page::create(array(
			'id' => 1,
			'account_id' => 1,
			'title' => 'Testpage',
			'route' => '/test',
		));
	}

}