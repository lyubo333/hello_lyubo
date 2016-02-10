<?php
$names = array('Sophia' => '31',
				'Jacob' => '41',
				'William' => '39',
				'Ramesh' => '40');
asort($names);
foreach ($names as $key => $value) {
	echo "$key is $value";
}

echo "<br>";

$names = array('Sophia' => '31',
				'Jacob' => '41',
				'William' => '39',
				'Ramesh' => '40');
ksort($names);
foreach ($names as $key => $value) {
	echo "$key is $value";
}

echo "<br>";

$names = array('Sophia' => '31',
				'Jacob' => '41',
				'William' => '39',
				'Ramesh' => '40');
arsort($names);
foreach ($names as $key => $value) {
	echo "$key is $value";
}

echo "<br>";


$names = array('Sophia' => '31',
				'Jacob' => '41',
				'William' => '39',
				'Ramesh' => '40');
krsort($names);
foreach ($names as $key => $value) {
	echo "$key is $value";
}