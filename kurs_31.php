<?php
$user_data = array('first_name' => "Ivan", 
					'second_name' => "Ivanov", 
					'third_name' => "Ivanov", 
					'age' => "31", 
					'profession' => "police officer" );
echo "<ul>";
echo "<li>first name - ".$user_data['first_name']. "</li>";
echo "<li> second name - ".$user_data['second_name']. "</li>";
echo "<li> profession - ".$user_data['profession']. "</li>";
echo "</ul>";
?>


<?php
$user_cities = array('first_city' => "Sofia",
						'second_city' => "Vratsa",
						'third_city' => "Varna",
						'4-th city' => "Plovdiv" );
echo "<table border = 1>";
echo "<td>" .$user_cities['first_city']. "</td>";
echo "<td>" .$user_cities['4-th city']. "</td>";
echo "<td>" .$user_cities['second_city']. "</td>";
echo "<td>" .$user_cities['third_city']. "</td>";
echo "</table>";
?>

<?php
$user_cities = array('first_city' => "Sofia",
						'second_city' => "Vratsa",
						'third_city' => "Varna",
						'4-th city' => "Plovdiv" );
echo "<ol = 1>";
echo "<li>" .$user_cities['first_city']. "</li>";
echo "<li>" .$user_cities['4-th city']. "</li>";
echo "<li>" .$user_cities['second_city']. "</li>";
echo "<li>" .$user_cities['third_city']. "</li>";
echo "</ol>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>forms_php</title>
	<meta charset="UTF-8">
</head>
<body>
	<form action="kurs_31.php" method="post">
		username<input type="text" name="username">
		password<input type="text" name="password">
		<input type="submit" name="submit" value="Login">
	</form>
<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>
</body>
</html>








