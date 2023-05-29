<?php 

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
			$doneLastDay = false;
			$taskDate = substr($task['last_done_date'], 0, 10);
			$today = date("Y-m-d");

			if($today == $taskDate) {
				$doneLastDay = true;
			}

			?> 
			<a class="task grow" href="controller/updateTask.php?id=<?= $task['id']; ?>">
				<div>
					<div class="task_name"> <?= $task['name'] ?> </div>
					<div class="task_description"> <?= $task['description']; ?> </div>
					<div class="task_last"> Done on : <?= $task['last_done_date']; ?> </div>
				</div>
				<div class="task_status <?=$doneLastDay ? "done" : "todo"; ?>"></div>
			</a>
			<?php
		endforeach;
	}

	function addTask ($name, $description)
	{
		try {
			$query = "INSERT INTO task (name, description) VALUES (\"$name\", \"$description\");";
			$dst = $this->pdo->prepare($query);
			echo $query;
			$result = $dst->execute();
			var_dump($result);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	function taskExist ()
	{
		
	}

	function updateTask ($taskId)
	{
		try {
			$query = "UPDATE task SET last_done_date = CURRENT_TIMESTAMP() WHERE id = $taskId;";
			$dst = $this->pdo->prepare($query);
			echo $query;
			$result = $dst->execute();
			var_dump($result);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}



?>