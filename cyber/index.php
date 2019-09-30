<?php
require_once('homePage.php');
  $url = (isset($_GET['url'])) ? $_GET['url']:'homePage.php';
  $url = array_filter(explode('/',$url));
			
	$file = $url[0].'.php';
			
	if(is_file($file)){
	return $file;
}			
