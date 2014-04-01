<?php

class AccountTableSeeder extends Seeder {

	public function run()
	{
		Account::create(array(
			'id' => 1,
			'name' => 'default'
		));
	}

}