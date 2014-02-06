<?php

$a = 5;
$b = 10;

if ($a == $b) {
	//wow////
	echo "$a is equal to $b\n";
}

if ($a != $b) {
	///yes////
	echo "$a is not equal to $b\n";
}
///// Using Or//////
$won_lottery = FALSE;
$is_raining = TRUE;

if ($won_lottery || $is_raining) {
	echo "I'm buying a new car!\n";
}

////Using And////
$won_lottery = FALSE;
$is_raining = TRUE;

if ($won_lottery && $is_raining) {
	echo "I'm buying a new car!\n";
} else {
	echo "No new cars today.\n";
}
/////Exercises//////
$x = 0;
$y = 5;
$z = 10;

if ($x < $y && $y < $z) {
	// if $x < $y < then echo "{$x} < {$y} < {$z}\n";
	echo "{$x} < {$y} < {$z}\n";
}
if (($x >$x) || ($x < $z)) {
	echo "$x is greater than $x OR less than $z\n";
}
if (($y > $a) || ($x < $z)) {
	echo "$y is greater than $x OR less then $z\n";
}
if (($z > $x) && ($x < $z)) {
	echo "$z is greater than $x OR less than $z\n";
}
if (($y > $x) && ($x < $z)) {
	echo "$y is greater than $x AND less than $z\n";
}


$a = 5;
$b = 10;
$c = '10';

// Shorten then next 2 statements into an if/else
if ($a < $b) {
	// output the appropiate result
	echo "$a is less than $b\n";
}
if ($a > $b) {
	// output the appropiate result
	echo "$a is greater than $b\n";
}
// Shorten the next 2 statments into an if/else
if ($b >= $c) {
	echo "$b is greater than or equal to $c\n";
}
if ($b <= $c) {
	echo "$b is less than or equal to $c\n";
}

if ($b === $c) {
	echo "$b is identical to $c\n";
} 
elseif ($b == $c) {
	echo "$b is equal to $c\n";
} 
else {
	echo "$b is not equal to $c\n";
}
	


$a = 4;
$b = 60;
$c = '4';

// Shorten then next 2 statements into an if/else
if ($a < $b) {
	// output the appropiate result
	echo "$a is less than $b\n";
}
else {
	// output the appropiate result
	echo "$a is greater than $b\n";
} 
// Shorten the next 2 statments into an if/else
if ($b >= $c) {
	echo "$b is greater than or equal to $c\n";
}
else {
	echo "$b is less than or equal to $c\n";
}

if ($b === $c) {
	echo "$b is identical to $c\n";
}
elseif ($b == $c) {
	echo "$b is equal to $c\n";
}
else {
	echo "$b is not equal to $c\n";
}

?>