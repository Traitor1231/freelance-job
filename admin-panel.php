<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>МБДОУ д/с «Колобок» х. Денисов.</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/botstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <main class="admin-container">
      <div class="content">
        <section class="header-image">
          <img src="img/header-image.png" alt="">
          <div class="arrow" id="arrowTop" hidden><img src="img/arrow.png" alt="arrow">
            <p>Наверх</p>
          </div>
        </section>
        <section class="header gradient">
          <header>
            <a href="index.php"><img src="img/logo.png" class="logo" alt="logo"></a>
            <nav>
              <ul>
                <li class="list mobile-dropdown">
                  <a class="btn btn-secondary" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">☰</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php if($_SESSION['status'] == 'admin'){ ?>
                      <a class="dropdown-item" href="admin-panel.php">Панель управления</a>
                      <a class="dropdown-item" href="index.php">Главная</a>
                      <a class="dropdown-item" href="teachers.php">Педагоги</a>
                      <a class="dropdown-item" href="news.php">Новости</a>
                      <a class="dropdown-item" href="group.php">Список групп</a>
                      <a class="dropdown-item" href="#callback">Обратная связь</a>
                      <?php } ?>
                        <?php if($_SESSION['status'] == 'user'){ ?>
                          <a class="dropdown-item" href="index.php">Главная</a>
                          <a class="dropdown-item" href="teachers.php">Педагоги</a>
                          <a class="dropdown-item" href="news.php">Новости</a>
                          <a class="dropdown-item" href="group.php">Список групп</a>
                          <a class="dropdown-item" href="#callback">Обратная связь</a>
                          <?php } ?>
                            <?php if($_SESSION['status'] == ''){ ?>
                              <a class="dropdown-item" href="auth.php">Войти</a>
                              <?php }?>
                                <?php  if($_SESSION['status'] == 'user'){ ?>
                                  <a class="dropdown-item" href="requests/out.php">Выйти</a>
                                  <?php } ?>
                                    <?php  if($_SESSION['status'] == 'admin'){ ?>
                                      <a class="dropdown-item" href="requests/out.php">Выйти</a>
                                      <?php } ?>
                  </div>
                </li>
                <?php if($_SESSION['status'] == 'admin'){ ?>
                  <li class="list full-monitor-dropdown"><a href="admin-panel.php">Панель управления</a></li>
                  <li class="list full-monitor-dropdown"><a href="index.php">Главная</a></li>
                  <li class="list full-monitor-dropdown"><a href="teachers.php">Педагоги</a></li>
                  <li class="list full-monitor-dropdown"><a href="news.php">Новости</a></li>
                  <li class="list full-monitor-dropdown"><a href="group.php">Список групп</a></li>
                  <li class="list full-monitor-dropdown"><a href="#callback">Обратная связь</a></li>
                  <?php } ?>
                    <?php if($_SESSION['status'] == 'user'){ ?>
                      <li class="list full-monitor-dropdown"><a href="index.php">Главная</a></li>
                      <li class="list full-monitor-dropdown"><a href="teachers.php">Педагоги</a></li>
                      <li class="list full-monitor-dropdown"><a href="news.php">Новости</a></li>
                      <li class="list full-monitor-dropdown"><a href="group.php">Список групп</a></li>
                      <li class="list full-monitor-dropdown"><a href="#callback">Обратная связь</a></li>
                      <?php } ?>
                        <?php if($_SESSION['status'] == ''){ ?>
                          <li class="list full-monitor-dropdown"><a href="auth.php">Войти</a></li>
                          <?php } ?>
                            <?php if($_SESSION['status'] == 'user'){ ?>
                              <li class="list full-monitor-dropdown"><a href="requests/out.php">Выйти</a></li>
                              <?php } ?>
                                <?php  if($_SESSION['status'] == 'admin'){ ?>
                                  <li class="list full-monitor-dropdown"><a href="requests/out.php">Выйти</a></li>
                                  <?php } ?>
              </ul>
            </nav>
            <h1>МБДОУ д/с «Колобок» х. Денисов.</h1>
            <hr>
            <p>Муниципальное бюджетное дошкольное образовательное учреждение детский сад 
              «Колобок» х Денисов, Мартыновский район, Ростовской области Наш сайт, в 
              первую очередь, адресован тем, кого волнуют вопросы дошкольного образования, 
              кто не равнодушен и заинтересован в гармоничном и всестороннем развитии своего
              ребёнка, кто готов поделиться опытом, идеями, предложениями, рассказать о 
              трудностях воспитания, обратиться за помощью к высококвалифицированным 
              педагогам, специалистам.</p>
            <div class="btn-wrapper">
              <button onClick='location.href="organization-info.php"' class="btn">Узнать больше</button>
            </div>
        </section>
        <section class="content-box gradient oragination-grid-none">
          <div class="admin-panel">
          <?php  if($_SESSION['status'] == 'admin'){ ?>
            <h1>Панель управления</h1>
            <hr>
            <h2>Раздел: Педагоги</h2>
            <form class="admin-form" action="requests/create_teachers.php" method="post">
              <div class="column-1 admin-input-wrapper">
                <input  type='text' name='name' required  placeholder="ФИО">
              </div>
              <div class="column-2 admin-input-wrapper">
                <label class="btn" for="image-teachers" name='image' required >Выбрать изображение</label>
              </div>
              <div class="column-3 admin-input-wrapper">
                <input type='text' name='number' required  placeholder="Телефон">
              </div>
              <div class="column-4 admin-input-wrapper admin-textarea-wrapper">
                <textarea class="admin-textarea-input" type='text' name="description" required placeholder="ИНФОРМАЦИЯ"></textarea>
              </div>
              <div class="column-5 admin-input-wrapper admin-textarea-postition">
                <input type='text' name='position' required placeholder="Должность">
              </div>
              <div class="column-6 admin-input-wrapper add-image">
                <input  id="image-teachers" multiple accept="image/*,image/jpeg" input type='file' name='image'>
              </div>
              <div class="column-7 admin-input-wrapper last-btn">
                <button  type="submit" class="btn last-btn">Добавить</button>
              </div>
            </form>
            <?php
            include('requests/display-teachers-table.php');
           ?>
           <hr>
            <h2>Раздел: Группы</h2>
            <form class="admin-form" action="requests/create_groups.php" method="post">
              <div class="column-1 admin-input-wrapper">
                <input type='text' name='name' required  placeholder="Название группы">
              </div>
              <div class="column-2 admin-input-wrapper">
                <label class="btn" for="image-groups" name='image' required >Выбрать изображение</label>
              </div>
              <div class="column-3 admin-input-wrapper">
                <input type='text' name='age' required  placeholder="Возрастной диапазон">
              </div>
              <div class="column-4 admin-input-wrapper admin-textarea-wrapper">
                <textarea class="admin-textarea-input" type='text' name="description" required placeholder="Девиз"></textarea>
              </div>
              <div class="column-5 admin-input-wrapper admin-textarea-postition">
                <input type='text' name='teacher' required placeholder="Педагог">
              </div>

              <div class="column-6 admin-input-wrapper add-image">
                <input  id="image-groups" multiple accept="image/*,image/jpeg" input type='file' name='image'>
              </div>
              <div class="column-7 admin-input-wrapper">
                <button  type="submit" class="btn last-btn">Добавить</button>
              </div>
            </form>
            <?php
            include('requests/display-groups-table.php');
           ?>
           <hr>
          <h2>Раздел: Новости</h2>
            <form class="admin-form" action="requests/create_news.php" method="post">
              <div class="column-1-news admin-input-wrapper">
                <input type='text' name='name' required  placeholder="Название новости">
              </div>
              <div class="column-2-news admin-input-wrapper">
                <label class="btn" for="image-news" name='image' required >Выбрать изображение</label>
              </div>
              <div class="column-3-news admin-input-wrapper admin-textarea-wrapper">
                <textarea class="admin-textarea-input" type='text' name="description" required placeholder="Информация"></textarea>
              </div>
              <div class="column-4-news admin-input-wrapper add-image">
                <input  id="image-news" multiple accept="image/*,image/jpeg" input type='file' name='image'>
              </div>
              <div class="column-5-news admin-input-wrapper">
                <button  type="submit" class="btn last-btn-news">Добавить</button>
              </div>
            </form>
            <?php
            include('requests/display-news-table.php');
           ?>
           <?php } ?>
          </div>
        </section>
        <section class="footer-wrapper gradient">
          <footer>
            <div class="iframe-wrapper">
              <h2>ОБРАТНАЯ СВЯЗЬ</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86468.23636190544!2d41.370099887507166!3d47.3703345788036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e2a3f9dc7789f3%3A0x32b9fad0f8018db1!2z0KjQutC-0LvRjNC90LDRjyDRg9C7LiwgMTksINCU0LXQvdC40YHQvtCyLCDQoNC-0YHRgtC-0LLRgdC60LDRjyDQvtCx0LsuLCAzNDY2NzE!5e0!3m2!1sru!2sru!4v1580933089155!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <form class="form" action="requests/save_message.php" method="post">
              <a name="callback"></a>
              <h2>ОСТАВЬТЕ НАМ СООБЩЕНИЕ</h2>
              <input name="name" type="text" placeholder="Имя" required>
              <input name="phone" type="text" placeholder="Телефон" required>
              <input name="email" type="text" placeholder="Почтовый адрес" required>
              <textarea name="message" placeholder="Ваше сообщение" required></textarea>
              <div class="button">
                <button type="submit" class="btn btn-outline-secondary">ОТПРАВИТЬ</button>
              </div>
            </form>
            <div class="contact-wrapper">
              <p><strong>Адрес:</strong> 143581, Ростовская область, Мартыновский район, х. Денисов, ул. Школьная, 19</p>
              <p><strong>Тел:</strong> +7-498-31-99-430</p>
              <p><strong>E-mail:</strong> detsad-42@mail.ru</p>
            </div>
          </footer>
        </section>
      </div>
    </main>
    <script src="js/arrow.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

  </html>