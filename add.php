<?php
 $task = $_POST['task'];
 if($task == '') {
 	echo 'Введите само задание';
 	exit();
 }

 require 'configDB.php';

 $dsn = 'mysql:host=localhost;dbname=todo.list';
 $pdo = new PDO($dsn, 'root', '');

 $sql = 'INSERT INTO tasks(task) VALUES(:task)';
 $query = $pdo->prepare($sql);
 $query->execute(['task' => $task]);

 header('Location: /');

?>