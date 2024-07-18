<?php

require 'database/connection.php';
var_dump($_GET);
$title = 'home';
$content = '<h1>Welcome to our home page</h1>';
include 'view/layout.php';

