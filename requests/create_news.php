<?php
	include('./config/config.php'); // Подключение к БД
	
	$name = $_POST['name']; // Для удобства работы
	$description = $_POST['description'];
	$image = $_POST['image'];
	
	$result2 = $mysqli->query("INSERT INTO `news` SET name='".$name."',description='".$description."',image='".$image."'"); // Добавление информацию в базу
	
?>
<script>history.back();</script>