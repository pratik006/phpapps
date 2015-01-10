<?php 

/*
 * config - an example for setting up system settings
 * When you are done editing, rename this file to 'config.php'
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @version 2.1
 * @date June 27, 2014
 */
class Config {

	public function __construct() {

		//turn on output buffering
		ob_start();

		//site address
		
		
		
		//set default controller and method for legacy calls
		define('DEFAULT_CONTROLLER', 'index');
		define('DEFAULT_METHOD' , 'index');

		//set a default language
		define('LANGUAGE_CODE', 'en');

		//database details ONLY NEEDED IF USING A DATABASE
		define('DB_TYPE', 'mysql');
		
		define('DIR', 'http://localhost/myapps/');
		define('DB_HOST', 'localhost');
		define('DB_NAME', 'a7054067_apps');
		define('DB_USER', 'root');
		define('DB_PASS', 'root');
		
		
		/* define('DIR', 'http://prapps.net63.net/');
		define('DB_HOST', 'mysql1.000webhost.com');
		define('DB_NAME', 'a7054067_apps');
		define('DB_USER', 'a7054067_pratik');
		define('DB_PASS', 'chinat0wn'); */
		
		define('PREFIX', '');

		//set prefix for sessions
		define('SESSION_PREFIX', 'smvc_');

		//optionall create a constant for the name of the site
		define('SITETITLE', 'V2.1');

		//turn on custom error handling
		//set_exception_handler('core\logger::exception_handler');
		//set_error_handler('core\logger::error_handler');

		//set timezone
		date_default_timezone_set('Europe/London');

		//start sessions
		Session::init();

		//set the default template
		Session::set('template', 'default');
	}

}