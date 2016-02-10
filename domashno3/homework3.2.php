<!DOCTYPE html>
<html>
<head>
	<title>task_3.1</title>
	<meta charset = "UTF-8">
</head>
<body>
<p>Задайте стойност на три ъгъла, с които може да се построи валиден триъгълник.</p>
<form action="homework3.2.php" method="get">
	ъгъл1 <input type="text" name="angleA" value="">
	ъгъл2 <input type="text" name="angleB" value="">
	ъгъл3 <input type="text" name="angleC" value="">
	<input type="submit" name="submit" value="Въведи стойност">	
</form>
<?php
if (!empty($_GET['submit'])) {
		$angleA = $_GET['angleA'];
		$angleB = $_GET['angleB'];
		$angleC = $_GET['angleC'];
		$sum = $angleA + $angleB + $angleC;

		if ($sum == 180) {
			echo "Въведените от Вас стойности на ъглите могат да образуват триъгълник";
		} else {
			echo "Въведените от Вас стойности на ъглите не могат да образуват триъгълник";
		}

}
?>
</body>
</html>