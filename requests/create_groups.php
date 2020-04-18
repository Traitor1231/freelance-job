<?php
	include('./config/config.php'); // Подключение к БД
	
	$name = $_POST['name']; // Для удобства работы
	$age = $_POST['age'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$teacher = $_POST['teacher'];
	
	$result2 = $mysqli->query("INSERT INTO `groups` SET name='".$name."',age='".$age."',description='".$description."',image='".$image."',teacher='".$teacher."'"); // Добавление информацию в базу
	
?>
<script>history.back();</script>