<?php


/**
 * Class for creating paths for access
 */
class Routing {

	/**
	 * Initialization of active classes
	 */
	public static function buildRoute(){
		$controllerName = "ArithmeticOperationsController";
		$actionName = "getListOfOperations";

		$route = explode('/', $_SERVER['REQUEST_URI']);

		if (!empty($route[1])) {
			$controllerName = str_replace('-', '', ucwords($route[1], '-')) . "Controller";
		}
		
		include CONTROLLER_PATH . $controllerName . ".php";

		if (isset($route[2]) && !empty($route[2])) {
			$actionName = str_replace('-', '', ucwords($route[2], '-'));
			$actionName[0] = strtolower($actionName[0]);
		}

		$controller = new $controllerName();
		$controller->$actionName();
	}
}
