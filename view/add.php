<?php 
session_start();

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
	<link rel="stylesheet" type="text/css" href="/style/add.css">
</head>
<body>
	<?= $header->getContent(); ?>
	<form method="POST" action="../controller/addTask.php">
		<div>
			<div>
				<label for="task_name">Nom</label>
				<input id="task_name" type="text" name="task_name" maxlength="80">
			</div>
			<div>
				<label for="task_desc">Description</label>
				<textarea id="task_desc" name="task_desc"></textarea>
			</div>
			<input type="submit">
		</div>
	</form>
	<?php if($_SESSION): ?>
		<div class="result">
			<?php if(!$_SESSION['ok']): ?>
				<div class="error">
					<?= "Error n°".$_SESSION['result']['errorCode']." : ".$_SESSION['result']['errorText']; ?>
				</div>
			<?php else: ?>
				<div class="success">
					<?= "Task : \"".$_SESSION['result']['taskName']."\" was added succesfully (id :".$_SESSION['result']['taskId'].")"; ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</body>
</html>