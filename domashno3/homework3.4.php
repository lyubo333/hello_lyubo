<!DOCTYPE html>
<html>
<head>
	<title>task_4</title>
	<meta charset = "UTF-8">
</head>
<body>
<p>Въведете число, опитвайки се да отгатнете предварително зададеното от нас число в интервал от 0-10.</p>
<form action="homework3.4.php" method="get">
	Изберете число <input type="text" name="a" value="">
	<input type="submit" name="submit" value="Въведи число">	
</form>
<?php
if (!empty($_GET['submit'])) {
		$a = $_GET['a'];
		$num = $a;
		if ($num == 7) {
			echo "Браво - познахте числото";
		}elseif ($num < 7) {
			echo "Числото е по-малко от търсеното!";
		}elseif ($num > 7) {
			echo "Числото е по-голямо от търсеното!";
		}			
}
?>
</body>
</html>