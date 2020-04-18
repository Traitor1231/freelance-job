
<?php
include('config/config.php'); // Подключение к БД
try {
    /// Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Запрос на вывод записей из таблицы
    $sql = "SELECT name, image, number, description, position, id FROM teachers LIMIT 15";
    // Подготовка запроса
    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
 
    // Создаем таблицу вывода и форму для удаления записей
    echo "<form action='requests/delete_teachers.php' method='POST'><table>";
    echo "<tr><th class='column-1'>ФИО</th><th class='column-2'>Фото</th><th class='column-3'>Телефон</th><th class='column-4'>Инфромация</th><th class='column-5'>Должность</th><th class='column-6'>ID</th><th class='column-7'>Удалить запись</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["name"] . "</td>";
        echo "<td>" . $result_row["image"] . "</td>";
        echo "<td>" . $result_row["number"] . "</td>";
		echo "<td>" . $result_row["description"] . "</td>";
		echo "<td>" . $result_row["position"] . "</td>";
        echo "<td>" . $result_row["id"] . "</td>";
        echo "<td><input class='checkbox' type='checkbox' name='delete_row[]' value='" . $result_row["id"] . "'></td>";
        echo "</tr>";
    }
	?>
       </table>
          <br>
            <input class="btn add-table" type='submit' value='Удалить выбранные записи'> 
     </form>
	 <?php
}
catch(PDOException $e) {
    echo "Ошибка при удалении записи в базе данных: " . $e->getMessage();
}
// Закрываем соединение
$db = null;
?>		