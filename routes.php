<?php

$url = isset($_GET['url'])? $_GET['url'] : '/';

switch($url){
	case "home":
	require "pages/home.php";
	break;
	case "services":
	require "pages/services.php";
	break;
	case "reviews":
	require "pages/reviews.php";
	break;
	case "contacts":
	require "pages/contacts.php";
	break;
	default:
	require "pages/404.php";
	break;
}