<?php 
	if (isset($_POST['submit'])) {
		if ($_POST['username'] == 'user' && $_POST['password'] == '123') {
			header("location: ../index.php");
			exit;
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<form action="" method="POST">
		<h3>Form Login</h3>
		Username : 
		<input type="text" name="username">

		<br>

		Username : 
		<input type="password" name="password">

		<br>

		<button type="submit" name="submit">Login</button>
	</form>
</body>
</html>