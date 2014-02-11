<?php



function add($a, $b = 4) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
	} else {
		echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
	}
}

function subtract($a, $b = 9) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    }else {
		echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

function multiply($a, $b = 12) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    }else {
		echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

function divide($a, $b =5) {
  	if ((is_numeric($a) && is_numeric($b)) && $b !=0) {
    	echo $a / $b  . PHP_EOL;
    }elseif (!is_numeric($a) || !is_numeric($b)) {
    	echo 'ERROR: both arguments must be numeric' . PHP_EOL;
    }else {
    	echo 'ERROR: value cant be devided by 0' . PHP_EOL;
    }
}
    	    


function modulus($a, $b = 6) {
  	if (is_numeric($a) && is_numeric($b)) {
    	echo $a % $b . PHP_EOL;
    }else {
		echo 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}
 
// this contains an argument and not number, thats why it will give you an error
add(10, 'Jason'); 

add(10);
subtract(3);
multiply(8);
divide(65);
divide(4,0);
divide(7, 'clam');
modulus(50);

// $a = 30;
// $b = 10;

// add($a, $b);


// add(69, 7);
// subtract(50,6);
// multiply(45,5);
// divide(100,5);
// modulus(5,50); 


?>