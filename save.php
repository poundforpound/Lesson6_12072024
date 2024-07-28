<?php

require "database/connection.php";

$sql = "INSERT INTO reviews(name,description) VALUES(:name,:description)";

$statement = $pdo->prepare($sql);

$statement->execute([
	':name'=> $_POST['name'],
	':description'=> $_POST['description']
]);

header("Location: /reviews?success=true");