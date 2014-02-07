<?php


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
exit(0);


?>