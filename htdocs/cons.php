<?php
	$name = filter_var(trim ($_POST['name']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim ($_POST['email']),
	FILTER_SANITIZE_STRING);
	$mobile = filter_var(trim ($_POST['mobile']),
	FILTER_SANITIZE_STRING);
  $message = filter_var(trim ($_POST['message']),
	FILTER_SANITIZE_STRING);


	$mysql = new mysqli('localhost', 'root', 'root', 'Gym');
	$mysql->query("INSERT INTO `consultation`(`name`, `email`, `mobile`, `message`)
	VALUES('$name', '$email', '$mobile', `$message`)");
	$mysql->close();

	header('Location: /');
?>
