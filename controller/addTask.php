<?php
// Path prefix for autoload
define("PATH_PREFIX", "../");

// Autoloader to include code
include_once "autoload.php";

session_start();

// Debuging $_POST content
echo "<pre>"; // DEBUG
var_dump($_POST); // DEBUG
echo "</pre>"; // DEBUG

$taskDB = new TaskDB("mysql", "127.0.0.1", "3306", "daylii", "root", "");
$taskDB->taskExists($_POST['task_name'], $_POST['task_desc']);
$taskDB->addTask($_POST['task_name'], $_POST['task_desc']);


//header('Location: ../view/add.php');
?>