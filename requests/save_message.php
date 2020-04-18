<!DOCTYPE html>
<html lang="en">

<head>
  <title>Отправка сообщения</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="shortcut icon" href="../img/logo.png" type="image/png">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="message-wrapper">
    <?php
	include('./config/config.php'); 
	
	$name = $_POST['name']; 
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$result2 = $mysqli->query("INSERT INTO `users_messages` SET name='".$name."',phone='".$phone."',email='".$email."',message='".$message."'"); 
	
	if ($result2) {
		echo "<script type='text/javascript'>
		function Show_message() {
			alert('Ваше сообщение было успешно отправлено.');
		  }
		setTimeout(Show_message, 1000);</script>";
	} else {
		echo "<script type='text/javascript'>
		function Show_message() {
			alert('Извините, не удалось отправить ваше сообщение.');
		  }
		setTimeout(Show_message, 1000);</script>";
	};
	
?>
  <script type='text/javascript'>
    function Redirect_to_index() {
      location = "../index.php";
    }
    setTimeout(Redirect_to_index, 1000);
  </script>
</body>

</html>