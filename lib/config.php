<?php

	define('PATH', $_SERVER['DOCUMENT_ROOT'].'/application/');
	
	$url = array_filter(explode('/', v($_GET['url'])), function(&$var){
		return !empty($var);
	});
	
	define('MODE', array_shift($url) ?: 'view');
	define('CONTROLLER', array_shift($url) ?: 'none');
	define('METHOD', array_shift($url) ?: 'none');
	
	//lastInsertId();