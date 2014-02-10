<?php

if ($argc != 3) {
	echo "argv is {$arg1[1]} and argv is {$argv[2]}\n";
	exit(0);

}

$min = is_numeric($argv[1]) ? intval($argv[1]) 1;
$max = is_numeric($argv[2]) ? intval($argv[1]) 100;

if(is_numeric($min) || is_numeric($mx)) {
	// show error
	// exit
}

if ($min >= $max) {
	// show error
}

var_dump($argc);

var_dump($argv);


//Asks to guess the number

$number_guesses = 0;
fwrite(STDOUT, 'Guess my number? ');

$number = fgets(STDIN);
$number_guesses ++;

$random_number = mt_rand(1,100);

while($number != $random_number) {


if ($number < $random_number) {
		fwrite(STDOUT, "Higher\n");
}else {
	fwrite(STDOUT, "lower\n");
}

$number = fgets(STDIN);
$number_guesses ++;

}

echo"YOU WON!\n";
echo"number of guesses it took: $number_guesses\n";


?>