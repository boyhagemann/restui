<?php

class WidgetTableSeeder extends Seeder {

	public function run()
	{
		Widget::create(array(
			'id' => 1,
			'account_id' => 1,
			'title' => 'Form',
			'name' => 'form',
			'data_resource_id' => 1,
			'view_resource_id' => 3,
		));

		Widget::create(array(
			'id' => 2,
			'account_id' => 1,
			'title' => 'Overview',
			'name' => 'overview',
			'data_resource_id' => 1,
			'view_resource_id' => 3,
		));

		Widget::create(array(
			'id' => 3,
			'account_id' => 1,
			'title' => 'Text',
			'name' => 'text',
			'data_resource_id' => 1,
			'view_resource_id' => 3,
		));

	}

}