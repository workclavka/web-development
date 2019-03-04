<?php

/**
 * Basic class for views
 */
class View {
	
	public $header = ROOT . "/views/header.php";
	public $footer = ROOT . "/views/footer.php";

	public function render($vew, $pageData)
	{
		include $this->header;
		include ROOT . "/views/" . $vew . ".php";
		include $this->footer;
	}	

	public function renderAjax($vew, $pageData)
	{
		include ROOT . "/views/" . $vew . ".php";
	}

}