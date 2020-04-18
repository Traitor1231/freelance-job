<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/auth.css">
  </head>

  <body>
    <div style="auth-wrapper">
      <?php 

	include('config/config.php'); // Подключение к БД
	include('inputtest.php'); // Подключение проверок ввода
	
	
	$login = $_POST['login']; // Присвоить введённые значения переменным для удобной работы
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$login = test_input($login); // Обработка ввода
	$password = test_input($password);
	$email = test_input($email);

	
	$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'"); // Поиск пользователя в базе
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['password'])) {// Проверка ввода,вывод сообщения с помщью javasctipt и редирект(перемещение) на преддущую страницу auth.php

		echo "<script type='text/javascript'>
		function Show_message() {
			alert('Извините, введённый вами логин или пароль не верны.');
		  }
		setTimeout(Show_message, 1000);</script>";
		echo "<script type='text/javascript'>
		function Redirect_to_auth() {
			location='../auth.php';
		  }
		setTimeout(Redirect_to_auth, 1100);</script>";

	} elseif ($myrow['password']==$password) {
			$_SESSION['login']=$myrow['login'];
			$_SESSION['id']=$myrow['id'];
			$_SESSION['email']=$myrow['email'];
			$_SESSION['status']=$myrow['status'];
			$_SESSION['birthday']=$myrow['birthday'];				

	} else { // вывод сообщения с помщью javasctipt и редирект(перемещение) на преддущую страницу auth.php

		echo "<script type='text/javascript'>
		function Show_message() {
			alert('Извините, введённый вами логин или пароль не верны.');
		  }
		setTimeout(Show_message, 1000);</script>";
		echo "<script type='text/javascript'>
		function Redirect_to_auth() {
			location='../auth.php';
		  } 
		setTimeout(Redirect_to_auth, 1100);</script>";
	};
?>
    </div>
    <script type='text/javascript'> // При успешной авторизации делаем редирект(перемещение) на страницу index.php
      function Redirect_to_index() {
        location = "../index.php";
      }
      setTimeout( Redirect_to_index, 1000);
    </script>
  </body>

  </html>