<?php
//task5
session_start();
echo "Hello, " .$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>page_3</title>
	<meta charset = "UTF-8">
</head>
<body>
	<form action="page_3.php" method="post">
	<p>Въведете номер на дебитна/кредитна карта.</p>
	<input type="text" name="card_number" value="">
	<p>Въведете налична сума пари.</p>
	<input type="text" name="money" value="">
	<input type="submit" name="submit" value="Въведи">
	</form>
</body>
</html>