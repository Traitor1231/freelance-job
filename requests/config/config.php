<?php

	$db_host = 'localhost'; // сервер
	$db_user = 'root'; // логин пользовате при входе в БД
	$db_password = ''; // пароль пользовате при входе в БД
	$db_name = 'Database';// имя БД
	
	$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name); // создание переменных для заиси и отображение данных из БД
	$mysqli->query("SET NAMES 'utf-8'");  // кодировка 
	
	if ($mysqli->connect_errno) { 
		echo "Не удалось подключиться к MySQL:  ".$mysqli->connect_error; // сообщение если не удалось подключится к БД
	};
	
?>