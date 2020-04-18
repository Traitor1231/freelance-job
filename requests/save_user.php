<?php
header('Content-Type: text/html; charset=UTF-8');
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/reg.css">
  </head>

  <body>
    <div style="reg-wrapper">
      <?php
	include('config/config.php'); // Подключение к БД
	include('inputtest.php'); // Подключение проверок ввода

	
	$FIO = $_POST['FIO']; // Для удобства работы
	$email = $_POST['email'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$bd = $_POST['birthday'];
	$verifypass = $_POST['verifypass'];
	$phone = $_POST['phone'];
	
	if ($verifypass !== $password) { //верификация пароля, вывод сообщения на JavaScript, редирект(перенаправление) на страницу reg.php
		exit("<script type='text/javascript'>
		function Show_message() {
			alert('Пароли не совпадают.');
		  }
		setTimeout(Show_message, 1000);
		function Redirect_to_reg() {
			location='../reg.php';
		  }
		setTimeout(Redirect_to_reg, 1100);</script>");
	};
	
	$FIO = test_FIOinput($FIO); // Обработка данных
	$email = test_mailinput($email);
	$login = test_input($login);
	$password = test_passinput($password);
	
	$result = $mysqli->query("SELECT * FROM users WHERE login='$login'"); // Проверка на отсутствие пользователя в базе
	$myrow = mysqli_fetch_array($result);
	if (!empty($myrow['login'])) { // Проверка на существования пользователя с таким же логином как и поле login, вывод сообщения на JavaScript, редирект(перенаправление) на страницу reg.php
		exit("<script type='text/javascript'>
		function Show_message() {
			alert('Извините, введённый вами логин уже зарегистрирован. Введите другой логин.');
		  }
		setTimeout(Show_message, 1000);
		function Redirect_to_reg() {
			location='../reg.php';
		  }
		setTimeout(Redirect_to_reg, 1100);
		</script>"
);
	};
	
	$result2 = $mysqli->query("INSERT INTO `users` SET FIO='".$FIO."',email='".$email."',login='".$login."',password='"
	.$password."',birthday='".$bd."',phone='".$phone."',status='user'"); // Добавление пользователя в базу

?>
    </div>
    <script type='text/javascript'>
      function Redirect_to_index() { //При удачной регистрации делаем редирект(перенаправление) на страницу auth.php для авторизации
        location = "../auth.php";
      }
      setTimeout(Redirect_to_index, 1000);
    </script>
  </body>

  </html>