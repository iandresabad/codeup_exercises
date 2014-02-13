<?php

$items = array();
// Create array to hold list of todo items

// List array items formatted for CLI
function list_items($items) {
    $array_convert_string = '';
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
    foreach ($items as $key => $item) {
        $new_index = $key + 1;
        $array_convert_string .= "[" . $new_index . "]" . $item . PHP_EOL;
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

// function sort_menu($sorting = TRUE) {
//     if ($sorting) {
//         $sorting = sort(fgets(STDIN)); 
//         return .= $
//     }else {

//     } 

// }
//     echo sort_menu($sorting)

// The loop!
do {
        echo list_items($items);
        // Echo the list produced by the function
    // Echo the list produced by the function

    // Show the menu options
        echo '(N)ew item, (R)emove item, (Q)uit, (S)ort : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        $input = get_input(TRUE);
        // Add entry to list array
       // $items[] = trim(fgets(STDIN));
       // asks the uses if they want to add it to the beginning or end
       echo 'Where do you want the item?' . PHP_EOL;
       echo 'press1 to put item in the begining' . PHP_EOL;
       echo 'press2 to put item in the end' . PHP_EOL;
       // user puts input 
       $option = get_input(TRUE);
       // this is function of that option 
       if ($option == 1) {
            array_unshift($items, $input);
       }else {
            array_push($items, $input);
       }
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input(TRUE);
        // Remove from array
        unset($items[$key - 1]);
    } elseif ($input == 'S') {       
        echo 'choose and option' . PHP_EOL;
        echo 'press1 to sort from a-z' . PHP_EOL;
        echo 'press2 to unsort from z-a' . PHP_EOL;
        $input = get_input(TRUE);

        if ($input == 1) {
            sort ($items);
        }else {
            rsort ($items);
        }
    } elseif ($input == 'F') { 
        $input = trim(fgets(STDIN));
        array_shift($items);
        echo 'Do you want to delete the first item?' . PHP_EOL;
    } elseif ($input == 'L') {
        $input = trim(fgets(STDIN));
        array_pop($items);
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

// use array_shift to put front and back 
// use array_unshift to take it away 
// and use array_push
// then shift 
// then pop 


?>