<?php 
function test_pdo($driver, $host, $port, $db_name, $db_user, $db_pass)
{
	try {
		$pdo = new PDO("$driver:host=$host;port=$port;dbname=$db_name", $db_user, $db_pass);
		return $pdo;
	} catch (Exception $e) {
		var_dump($e);
		echo "\n\n";
		echo $e->getMessage();
	}
}
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
			$task_test = test_pdo("mysql", "127.0.0.1", "3306", "daylii", "root", "");
			echo "\n\n";
			var_dump($task_test);
			// phpinfo();
			?>
		</pre>
	</main>
</body>
</html>