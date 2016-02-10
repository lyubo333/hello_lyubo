<!DOCTYPE html>
<html>
<head>
	<title>task2</title>
	<meta charset = "UTF-8">
</head>
<body>
	<form action="homework3.1.php" method="get">
	Ден от седмицата<input type="text" name="day">
	<input type="submit" name="submit" value="Въведете любим ден от седмицата на английски език">	
	</form>
<?php

if (!empty($_GET['submit'])) {
		$day = $_GET['day'];

	if ($day == 'Monday') {
		echo "Laugh on Monday, laugh for danger.";
	}elseif ($day == 'Tuesday') {
		echo "Laugh on Tuesday, kiss a stranger.";
	}elseif ($day == 'Wednesday') {
		echo "Laugh on Wednesday, laugh for a letter.";
	}elseif ($day == 'Thursday') {
		echo "Laugh on Thursday, something better.";
	}elseif ($day == 'Friday') {
		echo "Laugh on Friday, laugh for sorrow.";
	}elseif ($day == 'Saturday') {
		echo "Laugh on Saturday, joy tomorrow.";
	}elseif ($day !='Monday' && $day !='Tuesday' && $day !='Wednesday' && $day !='Thursday' && $day !='Friday' && $day !='Saturday' ) {
		echo "It is Sunday.";
	}
}

?>
</body>
</html>
