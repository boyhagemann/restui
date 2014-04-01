<?php

use Boyhagemann\Crud\CrudController;
use Boyhagemann\Form\FormBuilder;
use Boyhagemann\Model\ModelBuilder;
use Boyhagemann\Overview\OverviewBuilder;

class NewsController extends CrudController
{
	/**
	 * @param FormBuilder $fb
	 */
	public function buildForm(FormBuilder $fb)
	{
		$fb->text('title')->label('Title')->required();
	}

	/**
	 * @param ModelBuilder $mb
	 */
	public function buildModel(ModelBuilder $mb)
	{
		$mb->name('News')->table('news');
	}

	/**
	 * @param OverviewBuilder $ob
	 */
	public function buildOverview(OverviewBuilder $ob)
	{
		$ob->fields(array('title'));
	}

	public function create()
	{
		$this->init(__METHOD__);

		$this->getBaseRoute();

		$form = $this->getForm();
		$model = $this->getModel();
		$errors = Session::get('errors');
		$route = $this->getBaseRoute();
//		$title = Config::get('crud::config.title');
//		$view = Config::get('crud::config.view.create');

		$fb = $this->getFormBuilder();

		return !Request::ajax()
			? array(
				'action' => $fb->getRoute(),
				'method' => $fb->getMethod(),
				'elements' => array(
					'title' => array(
						'view' => 'form.text',
						'label' => 'Title',
						'help' => 'Add a title',
						'description' => 'Fill in a title',
						'placeholder' => 'Title...',
						'rules' => 'required|alpha',
					)
				)
			)
			: $form;

	}
}

