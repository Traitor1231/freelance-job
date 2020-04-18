<?php
   include('config/config.php'); // Подключение к БД 
   $link = mysqli_connect($db_host, $db_user, $db_password, $db_name); 
                        
   if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
   }
                        
   $sql = mysqli_query($link, 'SELECT `id`, `name`, `description`,`image` FROM `news`');
   while ($result = mysqli_fetch_array($sql)) {
                         
   ?>
  <div class="news-wrapper">
    <form class="form">
        <h2>
           <?php echo "{$result['name']} ";?>
         </h2>
         <hr>
         <div class="news-text-wrapper">
            <p><?php echo "{$result['description']} ";?></p>
         </div>
         <img alt="news-image" class="news-img" src="img/<?php echo "{$result[ 'image']}";?>">
    </form>
  </div>
  <?php 
 }
?>