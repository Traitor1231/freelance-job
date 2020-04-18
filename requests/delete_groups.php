<!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Удаление строки</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" href="../css/auth.css">
  </head>

  <body>
  <div style="auth-container">
<?php
include('config/config.php'); // Подключение к БД
try {
    // Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password);
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Создаем массив, в котором будем хранить идентификаторы записей
    $ids_to_delete = array();
    // Переносим данные (отмеченные записи) из полей формы в массив
   error_reporting(0); foreach($_POST['delete_row'] as $selected){
        $ids_to_delete[] = $selected;
    }
 
    // Если пользователь не отметил ни одной записи для удаления,
    // то прерываем выполнение кода
    if(empty($ids_to_delete)){
        echo "<script type='text/javascript'>
		function Show_message() {
			alert('Вы не выделили ни одной записи для удаления');
		  }
        setTimeout(Show_message, 1000);
        function Redirect_to_admin() {
			location='../admin-panel.php';
		  }
		setTimeout(Redirect_to_admin, 1100);
        </script>";

        return;
        
    }
 
      
    // Если есть хоть одно заполненное поле формы (запись выделена для удаления),
    // то составляем запрос.    
    if(sizeof($ids_to_delete > 0)){
        // Запрос на удаление выделенных записей в таблице
        $sql = "DELETE FROM groups WHERE id IN (" . implode(',', array_map('intval', $ids_to_delete)) . ")";
        // Перед тем как выполнять запрос предлагаю убедится, что он составлен без ошибок.
        // echo $sql;
       
        // Подготовка запроса.
        $statement = $db->prepare($sql);
 
        // Выполняем запрос.
        $statement->execute();
    
    }
}
 
catch(PDOException $e) {
    echo "<script type='text/javascript'>
    function Show_message() {
        alert('Ошибка при удалении записи в базе данных');
      }
    setTimeout(Show_message, 1000);
    function Redirect_to_admin() {
        location='../admin-panel.php';
      }
    setTimeout(Redirect_to_admin, 1100);
    </script>". $e->getMessage();
    
}
 
// Закрываем соединение.
$db = null;
?>
      <script type='text/javascript'>
      function Redirect_to_admin() {
        location = "../admin-panel.php";
      }
      setTimeout( Redirect_to_admin, 1000);
    </script>
    </body>

</html>