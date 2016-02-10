<!DOCTYPE html>
<html>
<head>
	<title>task6</title>
	<meta charset = "UTF-8">
</head>
<body>
<form action="homework4.3.php" method="get">
	<select name="city">
		<option value="Sofia"> Sofia </option>
		<option value="Athens"> Athens </option>
		<option value="Bucharest"> Bucharest </option>
	</select>
	<input type="submit" name="submit" value="Избери">
</form>

<?php
$city = array('Sofia' => 'Bulgaria',
			  'Athens' => 'Greece',
			  'Bucharest' => 'Romania');
foreach ($city as $key => $value) {
	echo "$city";
}




?>
</body>
</html>