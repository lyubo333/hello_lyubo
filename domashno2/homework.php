<?php
//task1
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
$d = $a + $b + $c; 
echo '$a='.$a .'$b '. $b .'$c '.$c;
if ($d == 180) {
	echo '$d' .$d. 'triangle';
}
elseif ($d != 180) {
	echo '$d' .$d. 'not triangle' . "<br>";
	
}
?>


<?php
//task2
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
echo '$a='.$a .'$b '. $b .'$c '.$c;
if ($a + $b > $c) {
	echo 'triangle';
}elseif ($a + $c > $b) {
	echo 'triangle';
}elseif ($c + $b > $a) {
	echo 'triangle';
}
else {
	echo 'not triangle' . "<br>";
	
}
?>


<?php
//task3
$a = rand(0, 100);
echo 'a'.$a;
if (($a %3 == 0) && ($a %5 == 0) && ($a %7 == 0)) {
	echo '$a is divisible to 3,5,7';
else {
	echo '$a is not divisible to 3,5,7';
}
?>

<?php
//task6
$a = rand(0, 10);
$b = rand(0, 10);
$c = rand(0, 10);
$d = rand(0, 10);
$e = rand(0, 10);
echo '$a'.$a .'$b'.$b .'$c'.$c .'$d'.$d .'$e'.$e; 
if (($a < $b) && ($b > $a) && ($c > $b) && ($d > $c) && ($e > $d)){
	echo "growing row";
} else {
	echo "not growing row";
} 

?>


<?php
//task5
$day = rand(1, 100);
$month = rand(1, 100);
$year = rand(1, 100000);
echo 'day' .$day . 'month'. $month. 'year'. $year;
if (($day > 31 ) || ($month > 12) || ($year > 100000)){
	echo "not valid date";
}
else {
	echo "valid date";
}

?>

<?php
// task 4
$kwh=315;
$bill1=50*0,10;
$bill2=$bill1 + 100*0,15;
$bill3=$bill2 + 100*0,25;
if ($kwh<=50) {
	$bill=$kwh * 0.10;
}
ifelse ($kwh>50&&$kwh<=150) {
	$kwh1=$kwh-50;
	$bill=$bill1+$kwh1*0,15;
ifelse ($kwh>150&&$kwh<=250) {
	$kwh2=$kwh-150;
	$bill=$bill2+$kwh2*0,25;
else {
	$kwh3=$kwh-250;
	$bill=$bill3+$kwh3*0,35;
}

