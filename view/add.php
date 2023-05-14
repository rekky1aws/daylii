<?php 
define("PATH_PREFIX", "../");

require_once "../controller/autoload.php";

$head = new Head();
$header = new Header();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ajouter une tâche </title>
	<?= $head->getContent(); ?>
</head>
<body>
	<?= $header->getContent(); ?>
	<form method="POST">
		
	</form>
</body>
</html>