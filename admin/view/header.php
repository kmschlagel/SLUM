<!DOCTYPE html>
<html lang='en'>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="scripts/jquery-1.10.2.min.js"></script>
	<script src="scripts/modernizr.js"></script>
</head>
<body>
<div id='container'>
<header>
<img src="view/images/slu_logo.gif">
<form action="index.php" method="post" id="test">
<ul>
	<?php
	if(empty($_SESSION['id'])) {
		echo "<li><input type='submit' name='action' value='admin login'></li>";
	}
	if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
		echo "<li><a href='view/help.php' target='_blank'><input type='button'
				name='help' value='help'></a></li>";
		echo "<li><input type='submit' name='action' value='logout'></li>";
	}
	?>
</ul>
</form>
</header>
