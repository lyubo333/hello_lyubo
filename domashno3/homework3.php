<!DOCTYPE html>
<html>
<head>
	<title>task_1</title>
	<meta charset = "UTF-8">
</head>
<body>
<form action="homework3.php" method="post">
	username <input type="text" name="username">
	password <input type="text" name="password">
	<input type="submit" name="submit" value="Login">	
</form>
<?php
	if (!empty($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "user1" && $password == "pass1")
		{
		echo "Добре дошъл $username";
		}
		elseif ($username == "user1" && $password != "pass1")
		{
		echo "<b>Грешна парола!</b>";
		}
		elseif ($username != "user1" && $password == "pass1") 
		{
		echo "<b>Грешно потребителско име!</b>";	
		}
		elseif ($username != "user1" && $password != "pass1") 
		{
		echo "<b>Грешно потребителско име и парола!</b>";	
		}
	
	}

?>
</body>
</html>






