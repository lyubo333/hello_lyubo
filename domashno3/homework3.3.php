<!DOCTYPE html>
<html>
<head>
	<title>task_3.2</title>
	<meta charset = "UTF-8">
</head>
<body>
<p>Задайте  три дължини на страни, с които може да се построи триъгълник.</p>
<form action="homework3.3.php" method="get">
	a <input type="text" name="a" value="">
	b <input type="text" name="b" value="">
	c <input type="text" name="c" value="">
	<input type="submit" name="submit" value="Въведи стойност">	
</form>
<?php
if (!empty($_GET['submit'])) {
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];

		if (($a + $b > $c) || ($a + $c > $b) ||($c + $b > $a)) {
			echo 'Построихте триъгълник';
		}else {
			echo 'С тези стойности не може да се построи триъгълник';
		}
}
?>
</body>
</html>