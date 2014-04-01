<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
			'email' => 'test@test.nl',
			'password' => Hash::make('test'),
			'account_id' => 1,
		));
	}

}