<?php

$title = "About us";
$content = '<h1>Аbout us</h1><br>phone:8999999;<br>email:build@mail.co<br>';
$style = 'style/general.css';

$sql = "SELECT * FROM reviews";

$statement = $pdo->query($sql);

$records = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($records as $record){
	$content .= "<p?>" .$record['name'] . " - " . $record['description'] . "</p>";
}


include "view/layout.php";