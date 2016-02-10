<?php
//task5
session_start();
echo "Hello, " .$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>page_2</title>
	<meta charset = "UTF-8">
</head>
<body>
<p>Изберете от следните продукти:</p>
	<ol type="circle">
		<li>
		<a href=""</a>Мъжко яке - 98лв.
			<form action="page_3.php" method="get">
			<input type="submit" name="submit" value="Купи">
		</li>
		<li>
		<a href=""</a>Дамски часовник - 315лв.
			<form action="page_3.php" method="get">
			<input type="submit" name="submit" value="Купи">
		</li>
		<li>
		<a href=""</a>Дамски парфюм - 135лв.
			<form action="page_3.php" method="get">
			<input type="submit" name="submit" value="Купи">
		</li>
		<li>
		<a href=""</a>Мъжки ризи - 40лв.
			<form action="page_3.php" method="get">
			<input type="submit" name="submit" value="Купи">
		</li>
		<li>
		<a href=""</a>Дамски палта - 280лв.
			<form action="page_3.php" method="get">
			<input type="submit" name="submit" value="Купи">
		</li>
	</ol>

</body>
</html>