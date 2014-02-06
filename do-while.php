<?php
$a = 0;
$b = 100;
$c = 2;

do {
	echo "$a  \n";
	$a= $a +2;
}while ($a <= 100); 

do {
	echo "$b \n";
	$b -= 5;
}while ($b >= -10); 

do {
	echo "$c \n";
	$c *= $c;
}while ($c < 1000000);  
	