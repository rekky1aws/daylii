<?php 
// Autoloader to include code
include_once "controller/autoload.php";

$header = new Header();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/style/main.css">
	<title> Daylii </title>
</head>
<body>
	<?= $header->getContent(); ?>
	<main>
		<pre>
			<?php 
			$task_test = new TaskDB("mysql", "127.0.0.1", "3306", "daylii", "root", "");
			$task_test->getTasks();

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