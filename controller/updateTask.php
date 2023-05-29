<?php 
require_once "../model/TaskDB.php";

try {
	// Access to DB
	$taskDB = new TaskDB("mysql", "127.0.0.1", "3306", "daylii", "root", "");

	// Update Request
	$taskDB->updateTask($_GET['id']);

	// Going back to main page
	header("Location: /");
} catch (Exception $e) {
	die($e->getMessage());
}



?>