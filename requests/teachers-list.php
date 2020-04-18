<?php
  include('config/config.php'); // Подключение к БД  
  $link = mysqli_connect($db_host, $db_user, $db_password, $db_name); 
                        
  if (!$link) {
     echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();//ошибка в с лучае не удачного подключения к бд
  exit;
  }
                        
  $sql = mysqli_query($link, 'SELECT `id`, `name`, `number`, `description`,`position`,`image` FROM `teachers`');// выбор строк которые необходимо вывести из БД на страницу
   while ($result = mysqli_fetch_array($sql)) {
                         
   ?>
  <div class="teacher-info">
    <form class="form">
      <h2>
        <?php echo "{$result['name']} ";?> 
      </h2>
      <hr>
      <img alt="teacher-img" class="teacher-img" src="img/<?php echo "{$result['image']} ";?>"> 
      <div class="description-wrapper">
        <p class="description">
          <strong>Должность:</strong>
          <?php echo "{$result['position']} ";?> 
            <div class="info">
              <strong>Информация о педагоге:</strong>
              <?php echo "{$result['description']} ";?>
            </div>
        </p>
      </div>
    </form>
    <div>
      <div class="teacher-phone">
        <p>
          <strong>Моб.телефон:</strong>
          <?php echo "{$result['number']}<br>";?> 
        </p>
      </div>
    </div>
  </div>
  <?php 
   }
?>