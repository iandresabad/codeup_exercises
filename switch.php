<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = rand(1,7);

switch($day_of_week) {
    case 1:
    	echo "Today is Monday\n";
    	break;
        // Output Monday
    case 2: 
    	echo "Today is Tuesday\n";
    	break;
        // Output Tuesday
    case 3;
    	echo "Today is wednesday\n";
    	break;
    case 4:
    	echo "Today is Thursday\n";
    	break;
    case 5:
    	echo "Today is Friday\n";
		break; 
	default:
		echo "It's weekend!\n";
}

?>


