<?php
$city = array();
$city['Bulgaria'] = 'Sofia';
$city['Greece'] = 'Athens';
$city['Romania'] = 'Bucharest';
$city['Turkey'] = 'Ankara';
sort($city);
	echo "<table border=1>";
foreach ($city as $key => $value) {
	echo "<tr>";
	echo "<td> $key </td>";
	echo "<td> $value </td>";
	echo "</tr>";
}
echo "</table>";
?>