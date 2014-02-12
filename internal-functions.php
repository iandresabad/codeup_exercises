<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);


function variable_AreSetorEmpty($checkVar) {
	if (isset($checkVar)) {
		return true;
	}elseif (empty($checkVar)) {
		return true;
	}else {
		return false;
	}
} 

// this will display that $nothing is SET
if (variable_AreSetorEmpty($nothing)) {
	echo "\$nothing is SET.\n";
} else {
	echo "\$nothing is not SET.\n";
}

// this will display that $nothing is going to be EMPTY 
if (variable_AreSetorEmpty($nothing)) {
	echo "\$nothing is EMPTY.\n";
} else {
	echo "\$nothing is not EMPTY.\n";
}

// this will display that $something is going to be a SET
if (variable_AreSetorEmpty($something)) {
	echo "\$something is SET.\n";
} else {
	echo "\$something is not SET.\n";
}

//This is for it to interpret the erray using serialize and unserialize

$serial = serialize($array);
var_dump($serial);

$deserialized = unserialize($serial);
var_dump($deserialized);


// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results

?>