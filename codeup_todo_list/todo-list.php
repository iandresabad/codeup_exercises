<?php

		function get_file_added($file) {

	    $handle = fopen($file, "r");
	    $setFile = filesize($file);
	    if ($setFile > 0) {
	    		$contents = fread($handle, filesize($file)); 
	    		fclose($handle); 
	    		return explode(PHP_EOL, $contents); 
	    }else {
	    	echo "You dont have items in your list"; 
	    	return array(); 
	    }
	}  

		function save_file($file, $array) {
		    $handle = fopen($filename, 'w');
		    $saveList = implode("\n", $array);
		    fwrite($handle, $saveList);
		    fclose($handle);

		}

		$file = "data/todo_list.txt";
		$items = read_file($file);


		    if (!empty($_POST)) {
		    	array_push($items, $_POST['newItem']);
		    	save_file("data/todo_list.txt", $item);
		    	header("Location: todo-list.php");
		    }

		    if (!empty($_GET)) {
		    	array_splice($items, $_GET['remove'], 1);
		    	$items = array_values($items);
		    	save_file("data/todo_list.php");
		    } 

		$filename = "todo.txt";
		$items = loadFile($filename);

		if(isset($_POST['newItem'])) {
			array_push($items, $item);

			saveFile($filename, $items);
		}

		if(isset($GET['remove'])) {

			$itemId = $_GET['remove'];
			unset($items[$itemId]);
			saveFile($filename, $items); 
		}

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Making a Todo-list</title>
</head>
<body>
	<h2>TODO List</h2>
	<ul>
		<?php foreach ($items as $key => $item) { ?>
		<li><?php echo $item; ?> <a href="?remove=<?php echo $key; ?>">Delete</a></li>
				<?php } ?>
	</ul>
	<h3>Add a TODO list item:</h3>
	<form method="POST" action="todo-list.php">
	<p>
		<label for="newItem">New Item:</label>
		<input id="newItem" name="newItem" type="text" autofocus="autofocus">   
	<button type="submit">Add Item</button>
	</p>
</form>
</body>
</html>