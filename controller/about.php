<?php

$title = 'About us';

$content = '<h1>About us</h1>';

$sql = 'SELECT * FROM users';

$statement = $pdo->query($sql);

$records = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($records as $record){
	$content .= "<p>" . $record['id'] . "</p>";
}

// while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
// 	$content = "<p>" . $row['name'] . "</p>";
// }

include 'view/layout.php';
