<?php
Router::connect('/','home/index');

class Conf{
	
	static $debug = 1; 

	static $databases = array(

		'default' => array(
			'host'		=> 'localhost',
			'database'	=> 'forever',
			'login'		=> 'root',
			'password'	=> ''
		)
	);
}
?>