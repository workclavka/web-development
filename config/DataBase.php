<?php

/**
 * Basic class for DateBase
 */
class DataBase {
	const USER_NAME = "root";
	const PASSWORD = "";
	const HOST = "localhost";
	const DB_NAME = "mysql";

	/**
	 * Connection to data base
	 */
	public static function connectionToDB()	{
		$user_name = self::USER_NAME;
		$password = self::PASSWORD;
		$host = self::HOST;
		$db_name = self::DB_NAME;

		$connection = new PDO("mysql:dbname={$db_name};host={$host}", $user_name, $password);
		return $connection;
	}
}