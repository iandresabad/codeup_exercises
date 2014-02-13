<?php

function humanized_list($get_input, $sorting = false) {
	if ($sorting) {
        sort ($get_input);
	}

	$result = array_pop ($get_input);

	$result = implode(', ', $get_input) . " and $result";

	return $result; 
	
} 

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_array, TRUE);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;










?>