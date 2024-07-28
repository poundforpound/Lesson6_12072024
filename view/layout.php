<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $style?>">
	<title><?php echo $title?></title>
</head>
<body>
	<header>
		<ul>
		<li><a href='home'>Home</a></li>
		<li><a href="contacts">Contacts</a></li>
		<li><a href="services">Services</a></li>
		<li><a href="reviews">Reviews</a></li>
	</ul>
	</header>
	<section>
		<?php echo $content?>
	</section>
	<footer>
	&copy; <?php echo date("Y"); ?>
	</footer>
</body>
</html>