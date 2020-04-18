<?php
	include('./config/config.php'); // Подключение к БД
	
	$name = $_POST['name']; // Передача значенией в БД
	$number = $_POST['number'];
	$description = $_POST['description'];
	$image = $_POST['image'];
	$position = $_POST['position'];
	
	$result2 = $mysqli->query("INSERT INTO `teachers` SET name='".$name."',number='".$number."',description='".$description."',image='".$image."',position='".$position."'"); // Добавление информацию в базу
	
?>
<script>history.back();</script>