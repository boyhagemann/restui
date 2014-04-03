<?php

class NodeTableSeeder extends Seeder {

	public function run()
	{
		Node::create(array(
			'account_id' => 1,
			'page_id' => 1,
			'widget_id' => 1,
			'key' => 'content',
			'data_params' => json_encode(array()),
			'view_params' => json_encode(array(
				'content' => 'content uit seed',
				'sidebar' => 'sidebar uit seed',
			)),
		));
	}

}