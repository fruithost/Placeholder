<?php
	define('ERROR_CODE',	403);
	define('ERROR_NAME',	'Forbidden');
	define('ERROR_MESSAGE',	'You don\'t have permission to access the requested directory. There is either no index document or the directory is read-protected.');
	
	require_once(dirname(__DIR__) . '/errors.php');
?>