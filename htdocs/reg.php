<?php
	$name = filter_var(trim ($_POST['name']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim ($_POST['email']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim ($_POST['password']),
	FILTER_SANITIZE_STRING);

	$password = md5($password."ghjljh12345");

	$mysql = new mysqli('localhost', 'root', 'root', 'Gym');
	$mysql->query("INSERT INTO `users`(`name`, `email`, `password`)
	VALUES('$name', '$email', '$password')");
	$mysql->close();

	header('Location: /');
?>
