<?php 

class TaskDB 
{
	public $pdo;

	function __construct ($driver, $host, $port, $db_name, $db_user, $db_pass)
	{
		try {
			$pdo = new PDO("$driver:host=$host;port=$port;dbname=$db_name", $db_user, $db_pass);
		} catch (Exception $e) {
			var_dump($e);
			echo "\n\n";
			echo $e->getMessage();
		}
	}

	function getTasks ()
	{
		try {
			$query = "SELECT * FROM task";
			$result = $this->pdo->prepare($query);
			//var_dump($result);
		} catch (Exception $e) {
			
		}
	}
}



?>