<?php namespace core;

class Config {

	public function __construct(){

		//turn on output buffering
		ob_start();

		//start sessions
		\helpers\session::init();

		set_exception_handler('core\logger::exception_handler');
		set_error_handler('core\logger::error_handler');

		//set timezone
		date_default_timezone_set('Europe/London');

		//site address
		define('DIR','http://domain.com/');

		//database details ONLY NEEDED IF USING A DATABASE
		define('DB_TYPE','mysql');
		define('DB_HOST','localhost');
		define('DB_NAME','dbname');
		define('DB_USER','username');
		define('DB_PASS','password');
		define('PREFIX','smvc_');

		//set prefix for sessions
		define('SESSION_PREFIX','smvc_');

		//optionall create a constant for the name of the site
		define('SITETITLE','V2.1');

		//set the default template
		\helpers\session::set('template','default');
		
	}

}