<?php

function error_argumentsAreValid($a, $b) {
	if(!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR: both arguments must be numeric\n";
		echo "ERROR: value cant be devided by 0\n";
		var_dump($a);
		var_dump($b);
		return false;
	}else {
		return true;
	}	
}


function add($a, $b = 4) {
	error_argumentsAreValid($a,$b);
	if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
	}
	// } else {
	// 	echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
	// }
}

function subtract($a, $b = 9) {
	error_argumentsAreValid($a, $b);
    if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
    }
		// echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
}

function multiply($a, $b = 12) {
	error_argumentsAreValid($a, $b);
    if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b;
    }
		// echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
}

function divide($a, $b = 5) {
	error_argumentsAreValid($a, $b);
  	if ($b !=0) {
    	return $a / $b;
    }else {
    	return false;
    }
    	// echo 'ERROR: value cant be devided by 0, ex: devide(4,0)' . PHP_EOL;
}
    	    
function modulus($a, $b = 6) {
	error_argumentsAreValid($a, $b);
  	if (is_numeric($a) && is_numeric($b)) {
    	return $a % $b;
    }
		// echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
}

 
// this contains an argument and not number, thats why it will give you an error
echo add(10, 'Jason') . PHP_EOL; 
$sum = add(15, 3) . PHP_EOL;
echo "The sum of 15 and 3 is {$sum}\n";
echo add(4,5) . PHP_EOL;
echo subtract(3) . PHP_EOL;
echo multiply(8) . PHP_EOL;
echo divide(65) . PHP_EOL;
echo divide(4,0) . PHP_EOL;
echo divide(7, 'clam') . PHP_EOL;
echo modulus(50) . PHP_EOL;

// $a = 30;
// $b = 10;

// add($a, $b);


// add(69, 7);
// subtract(50,6);
// multiply(45,5);
// divide(100,5);
// modulus(5,50); 


?>