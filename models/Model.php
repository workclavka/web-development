<?php

/**
 * Basic class for models
 */
class Model {
	protected $db = null;
  	
	public function __construct() {
		$this->db = DataBase::connectionToDB();
	}
}