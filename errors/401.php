<?php
	define('ERROR_CODE',	401);
	define('ERROR_NAME',	'Unauthorized');
	define('ERROR_MESSAGE',	'This server could not verify that you are authorized to access the URL $REDIRECT_URL. You either supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required.');
	
	require_once(dirname(__DIR__) . '/errors.php');
?>