<?php

$url = isset($_GET['url']) ? $_GET["url"] : "/";

switch($url){
	case "/":
		require "controller/home.php";
		break;
	case "about":
		require "controller/about.php";
		break;
	case "book";
		require "controller/book.php";
		break;
	default:
		require "controller/404.php";
		break;
		}