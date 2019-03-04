<?php

/**
 * Basic class for controllers
 */
class Controller
{
	public $view;
	protected $pageData = [];

	public function __construct()
	{
		$this->view = new View();
	}
}