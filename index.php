<?php
include('./includes/config.inc.php');

$request = $pages['/'];

if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./templates/pages/{$pages[$_GET['page']]['file']}.tpl.php")) {
		$request = $pages[$_GET['page']];
	}
	else { 
		$request = $not_found;
		header("HTTP/1.0 404 Not Found");
	}
}

include('./templates/index.tpl.php');
