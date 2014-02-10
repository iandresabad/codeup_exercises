<?php


fwrite(STDOUT, 'Enter a starting number? ');
$starting_number = intval(fgets(STDIN));


fwrite(STDOUT, 'enter a ending number? ');
$ending_number = intval(fgets(STDIN));


fwrite(STDOUT, 'Enter an increment of 1,2,3,4,5...10? ');
$increment = trim(fgets(STDIN));

	if (!is_numeric($increment)) {
		echo "'{$increment}' is NOT numeric", PHP_EOL;
		$increment = 1;	
	}

for ($i = $starting_number; $i <= $ending_number; $i += $increment)
	echo "{$i}\n";
		
?>

