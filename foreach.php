<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $datum) {
	if (is_scalar($datum)) {
		echo "{$datum}\n";
	} 
	else if (is_null($datum)) {
		echo "$datum\n";
	} 
	else if (is_bool($datum)) {
		echo "{$datum}\n";	
	}
	else if (is_float($datum)) {
		echo "$datum\n";
	} 
	else if (is_bool($datum)) {
		echo "{$datum}\n";	
	}
	else if (is_string($datum)) {
		echo "{$datum}\n";	
	}
}


?>