<?php
	define('ERROR_CODE',	411);
	define('ERROR_NAME',	'Length Required');
	define('ERROR_MESSAGE',	'A request with the $REDIRECT_REQUEST_METHOD method requires a valid <code>Content-Length</code> header.');
	
	require_once(dirname(__DIR__) . '/errors.php');
?>