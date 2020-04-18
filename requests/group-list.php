
<?php
   include('config/config.php'); // Подключение к БД  
   $link = mysqli_connect($db_host, $db_user, $db_password, $db_name); 
                        
   if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
   exit;
   }
                        
   $sql = mysqli_query($link, 'SELECT `id`, `name`, `age`, `description`,`teacher`,`image` FROM `groups`');
      while ($result = mysqli_fetch_array($sql)) {
                         
   ?>
  <div class="group">
    <form class="form">
      <h2 class="name">
        <?php echo "{$result['name']} ";?>
      </h2>
      <hr>
      <img alt="group-img" class="group-img" src="img/<?php echo "{$result['image']}";?>">
      <div class="description-wrapper">
        <p class="description">
        <strong>Педагог:</strong>
          <?php echo "{$result['teacher']} ";?>
            <div class="info"> <strong>Наш девиз:</strong>
              <?php echo "{$result['description']} ";?>
            </div>
        </p>
      </div>
    </form>
    <div>
      <p> <strong>Возрастной диапазон:</strong>
        (<?php echo "{$result['age']}"?>)
      </p>
    </div>

  </div>
  <?php 
   }
  ?>