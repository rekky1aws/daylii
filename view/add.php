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
	<title> Ajouter une tâche </title>
	<?= $head->getContent(); ?>
	<link rel="stylesheet" type="text/css" href="../style/add.css">
</head>
<body>
	<?= $header->getContent(); ?>
	<form method="POST" action="../controller/addTask.php" class="main_form">
		<div class="form_container">
			<div class="form_part">
				<label for="task_name">Nom :</label>
				<input id="task_name" type="text" name="task_name" maxlength="80" class="form_input">
			</div>
			<div class="form_part">
				<label for="task_desc">Description :</label>
				<textarea id="task_desc" name="task_desc" class="form_input desc_input"></textarea>
			</div>
			<input type="submit" class="form_submit">
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