<?php
//task5
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>e-mania</title>
</head>
<body>
<?php
if (!empty($_POST['submit'])) {
	$SESSION['user1'] = $_POST['user1'];
	echo "Hello, " .$_SESSION['user1'];
	echo '<a href="page_2.php">next</a>';
}else 
?>
<h3>ДОБРЕ ДОШЛИ В МАГАЗИН E-MANIA! MOЛЯ ВЪВЕДЕТЕ ВАШЕТО ПОТРЕБИТЕЛСКО ИМЕ И ПАРОЛА ПО-ДОЛУ.</h3>
	<form action="page_2.php" method="post">
	<input type="text" name="user1" value="username">
	<input type="password" name="password" value="..........">
	<input type="submit" name="submit" value="login">
	</form>
	<?php

?>
</body>
</html>