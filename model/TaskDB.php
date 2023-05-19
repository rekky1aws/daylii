<?php 

define('SIMIL_RATIO', 2);

class TaskDB 
{
	public $pdo;
	public $tasks;

	function __construct ($driver, $host, $port, $db_name, $db_user, $db_pass)
	{
		try {
			// Initialization de la PDO
			$this->pdo = new PDO("$driver:host=$host;port=$port;dbname=$db_name", $db_user, $db_pass);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	function getAllTasks ()
	{
		try {
			$query = "SELECT * FROM task";
			$dst = $this->pdo->prepare($query);
			$dst->execute();
			$this->tasks = $dst->fetchAll(PDO::FETCH_ASSOC);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	function dispTasks ()
	{
		foreach ($this->tasks as $task) :
			?> 
			<div class="task grow">
				<div class="task_name"> <?= $task['name'] ?> </div>
				<div class="task_description"> <?= $task['description']; ?> </div>
				<div class="task_last"> Done on : <?= $task['last_done_date']; ?> </div>
			</div>
			<?php
		endforeach;
	}

	function addTask ($name, $description)
	{
		try {
			$query = "INSERT INTO task (name, description) VALUES (\"$name\", \"$description\");";
			$dst = $this->pdo->prepare($query);
			echo $query; // DEBUG
			$result = $dst->execute();
			var_dump($result); // DEBUG

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	function taskExists ($name, $description)
	{
		try {
			$query = "SELECT * FROM task WHERE 1;";
			$dst = $this->pdo->prepare($query);
			echo $query; // DEBUG
			$result = $dst->execute();
			$values = $dst->fetchAll(PDO::FETCH_ASSOC);
			var_dump($result); // DEBUG
			var_dump($values); // DEBUG

			$similar = [];
			foreach ($values as $value) {
				$score = strcasecmp($name, $value['name']);
				echo "Task ".$value['id']." score : $score\n"; // DEBUG
				if (abs($score) <= SIMIL_RATIO) {
					array_push($similar, $value);
				}
			}

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	function updateTask ()
	{

	}
}



?>