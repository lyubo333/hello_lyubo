<?php
/*$a=5;
$b=9;

if ($a > $b) {
	echo '$b='.$b. '-'.'$a ='.$a;
}
else {
	echo '$a='.$a. '-'.'$b ='.$b;
}

$a = rand(0, 100);

if ($a % 2 == 0) {
	echo '$a =' .$a."even";
}
elseif ($a % 2 !=0) {
	echo '$a =' .$a."odd";
}
else {
	echo '$a = 0';
}


$a = rand(-10, 10);
$b = rand(-10, 10);
$c = $a*$b;
if ($c > 0) {
	echo '$c ='.$c. 'even';
}
elseif ($c < 0) {
	echo '$c ='.$c. 'odd';
}
?>

<?php

$a = rand(-10, 10);
$b = rand(-10, 10);
$c = $a+$b;

if ($c < 0) {
	echo '$c' .$c. 'negative';
}
elseif ($c > 0) {
	echo '$c' .$c. 'positive';
}


$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
$d = $a + $b + $c;
echo '$a='.$a .' '. $b .' '.$c;
if ($d == 180) {
	echo '$d' .$d. 'triangle';
}
elseif ($d != 180) {
	echo '$d' .$d. 'not triangle';
}


$username = "lyubo333";
$password = "lyubo1863";

$username2 = "lyubo333";
$password2 = "lubo1863";

if ($username2 == $username) {
	if ($password2 == $password){
		echo "Welcome, $username!";
	}
 	else {
	echo "Wrong password!";
	}
} 
else {
	echo "Wrong username!";
}


$var = 'b';

switch ($var) {
	case 'a':
		echo "Vocal";
		break;
		case 'e':
		echo "Vocal";
		break;
		case 'i':
		echo "Vocal";
		break;
		case 'o':
		echo "Vocal";
		break;
		case 'u':
		echo "Vocal";
		break;
	
	default:
		echo "Consonant";
		break;
}
*/

$var = "Work";
$var = "Weekend"

switch ($var) {
	case 'Monday':
	case 'Tuesday':
	case 'Wednesday':
	case 'Thursday':
		# code...
		break;
		# code...
		break;
		break;
	
	default:
		# code...
		break;
}
