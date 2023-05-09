<?php 
include_once "model.php";
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
	<header>
		<h1> Daylii </h1>
	</header>
	<main>
		<pre>
			<?php 
			$task_test = new TaskDB("mysql", "127.0.0.1", "3306", "daylii", "root", "");
			// phpinfo();
			?>
		</pre>
	</main>
</body>
</html>