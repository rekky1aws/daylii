<?php
// Path prefix for autoload
define("PATH_PREFIX", "");

// Autoloader to include code
include_once "controller/autoload.php";

$header = new Header();
$head = new Head();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= $head->getContent(); ?>
	<title> Daylii </title>
</head>
<body>
	<?= $header->getContent(); ?>
	<main>
		<pre>
			<?php 
			$task_test = createFromEnv();
			$task_test->getAllTasks();

			var_dump($_ENV); // Debug

			// phpinfo();
			?>
		</pre>
		<div class="tasks_container">
			<?php $task_test->dispTasks(); ?>
		</div>
		<a href="view/add.php" class="add_button grow">
			+
		</a>
	</main>
</body>
</html>