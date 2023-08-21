<?php
// Path prefix for autoload
define("PATH_PREFIX", "./");

// Autoloader to include code
include_once PATH_PREFIX."controller/autoload.php";

$header = new Header();
$head = new Head();

?>

<!DOCTYPE html>
<html>
<head>
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