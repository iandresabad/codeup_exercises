<?php

// Create array to hold list of todo items
$items = array();
// List array items formatted for CLI
function list_items($items) {
    $array_convert_string = '';
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
    foreach ($items as $key => $item) {
        $key++;
        $array_convert_string .= "[{$key}]" . " TODO " . $item . PHP_EOL;
    }

    return $array_convert_string; 
}

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) {
    if ($upper) {
        $upper = strtoupper(trim(fgets(STDIN)));
            return $upper;
    }else {
        $upper = trim(fgets(STDIN));

        return $upper;
    }
    // Return filtered STDIN input
}

// The loop!
do {
        echo list_items($items);
        // Echo the list produced by the function
    // Echo the list produced by the function

    // Show the menu options
        echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
       $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key--]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

//$serial = serialize($array);
//var_dump($serial);
// this one works as well; 
// echo $serial . PHP_EOL;

//$deserialized = unserialize($serial);
//var_dump($deserialized);

// Exit with 0 errors
exit(0);

?>