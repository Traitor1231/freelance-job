<?php
	function test_input($data) { 
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	};
	function test_FIOinput($FIO) { //проверка на валидность данных ФИО
		test_input($FIO);
		if (preg_match('/[А-Яа-яё\s]+$/', $FIO)) { // паттерн(условие) для ФИО
			return $FIO;
		} else exit("<script type='text/javascript'>
		function Show_message() {
			alert('ФИО должно содержать только кириллицу без цифр и знаков препинания.');
		  }
		setTimeout(Show_message, 1000);
		function Redirect_to_index() { 
			location='../reg.php';
		  }
		  setTimeout( Redirect_to_index, 1000);
		
		</script>");
	};// Если ФИО не проходит описанный паттерн(условие) выводим сообщение с помощью JavaScript
	function test_mailinput($mail) {  //проверка на валидность данных Email
		$mail = test_input($mail); 
		if (filter_var($mail, FILTER_VALIDATE_EMAIL)) { // паттерн(условие) для email
			return $mail;
		} else exit("<script type='text/javascript'>
		function Show_message() {
			alert('Вы ввели не валидный адрес почты.');
		  }
		setTimeout(Show_message, 1000);
		function Redirect_to_index() { 
			location='../reg.php';
		  }
		  setTimeout( Redirect_to_index, 1000);
		</script>");
	}; // Если Email не проходит описанный паттерн(условие) выводим сообщение с помощью JavaScript
	function test_passinput($pass) { //проверка на валидность данных пароля.
		test_input($pass);
		$lowercase = preg_match("/[a-z]+/", $pass); // паттерн(условие) для пароля
		$uppercase = preg_match("/[A-Z]+/", $pass); // паттерн(условие) для пароля
		$numbers = preg_match("/[0-9]*/", $pass);  // паттерн(условие) для пароля
		if ($lowercase && $uppercase && $numbers && strlen($pass)>=6 ) { // паттерн(условие) для пароля
			return $pass;
		} else exit("<script type='text/javascript'>
		function Show_message() {
			alert('Пароль должен содержать не менее 6 символов английской раскладки, верхнего и нижнего регистра.');
		  }
		setTimeout(Show_message, 1000);
		function Redirect_to_index() { 
			location='../reg.php';
		  }
		  setTimeout( Redirect_to_index, 1000);
		</script>");
	}; // Если пароль не проходит описанный паттерн(условие) выводим сообщение с помощью JavaScript
?>
