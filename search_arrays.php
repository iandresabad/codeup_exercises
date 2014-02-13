<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searching_array($value, $array) {
	$result = array_search($value, $array);
	if ($result === FALSE) {
			return FALSE;
	}
	else {
			return TRUE;
	}
}


function compare_arrays($array, $value) {
	$valueInCommon = 0; 
	foreach ($array as $array1_name) {
		$result = array_search($array1_name, $value);
		if (is_numeric($result)) {
			$valueInCommon ++;
		}
	}
	return $valueInCommon ;
}

echo compare_arrays($compare, $names) . " ";  

$result = searching_array('BOB', $names);
var_dump($result);

$result = searching_array('Tina', $names);
var_dump($result);

?>