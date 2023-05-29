<?php 
require_once "../model/TaskDB.php";

$taskDB = new TaskDB("mysql", "127.0.0.1", "3306", "daylii", "root", "");

$taskDB->updateTask($_GET['id']);
header("Location: /");

?>