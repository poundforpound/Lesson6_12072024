<?php

$title = "About us";
$content = '<h1>Аbout us</h1>';

$sql = "SELECT * FROM contacts";

$statement = $pdo->query($sql);

$records = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($records as $record){
	$content .= "<p?>" .$record['name'] . " - " . $record['email'] . "</p>";
}


include "view/layout.php";