<!DOCTYPE html>
<html>
<head>
	<title>zadacha_9</title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="task9.1.php" method="post">
	Име
	<input type="text" name="name">
	Любим град
	<input type="text" name="city">
	<input type="submit" name="submit" value="check">
	</form>

	<?php
	if (!empty($_POST['submit'])) {
		$name = $_POST['name'];
		$city = $_POST['city'];
		echo $name "твоят любим град е" $city;
	}
	?>

</body>
</html>