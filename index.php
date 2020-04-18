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
    <main class="main-container">
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
            <p>Муниципальное бюджетное дошкольное образовательное учреждение детский сад «Колобок» х Денисов, Мартыновский район, Ростовской области Наш сайт, в первую очередь, адресован тем, кого волнуют вопросы дошкольного образования, кто не равнодушен и заинтересован в гармоничном и всестороннем развитии своего ребёнка, кто готов поделиться опытом, идеями, предложениями, рассказать о трудностях воспитания, обратиться за помощью к высококвалифицированным педагогам, специалистам.</p>
            <div class="btn-wrapper">
              <button onClick='location.href="organization-info.php"' class="btn">Узнать больше</button>
            </div>
        </section>
        <section class="content-box gradient">
          <div class="content-box-info box-1">
            <h3> Мир
           реальностей</h3>
            <hr>
            <img src="img/hand.png" alt="hand">
            <p>Большой проект, протяженностью на весь учебный год для всех групп. Каждую неделю в детском саду создаются разные педагогические ситуации, в которых детям нужно самостоятельно найти решение, используя свои знания и набор социальных умений. Дети учатся общаться и договариваться, налаживают контакт для совместной деятельности, собирают, анализируют информацию, задают нужные вопросы, обнаруживают противоречия, мыслят критически.</p>
            <img class="img-kids" src="img/1.jpg" alt="kids">
            <h3> Степ-аэробика</h3>
            <hr>
            <img src="img/Bosu.png" alt="Bosu">
            <p>Степ-аэробика - это ритмичные движения вверх вниз по специальной степ-платформе. Она развивает подвижность в суставах, формирует свод стопы, тренирует равновесие, укрепляет мышечную систему, улучшает гибкость, пластику, восстанавливает тонус тела, нормализует деятельность сердечно-сосудистой системы, помогает выработать хорошую осанку, красивые, выразительные и точные движения.</p>
            <img class="img-kids" src="img/3.jpg" alt="kids">
          </div>
          <div class="content-box-info box-2">
            <h2>ЧТО У НАС ЕСТЬ ОСОБЕННОГО</h2>
            <h3> Мюзиклы и
           театр</h3>
            <hr>
            <img src="img/mask.png" alt="mask">
            <p>Каждый сезон мы проводим утренник у себя в саду, для которого вместе с ребятами готовим постановки. Начиная со старшей группы, два раза в год выступаем на сценах театров Москвы. Мы меняем обстановку и помещение, чтобы дети чувствовали себя важными и уверенными в разных условиях. Детская постановка от начала до конца происходит на настоящей сцене театра. Это формат мюзиклов - они и поют, и говорят, и танцуют.</p>
            <img class="img-kids" src="img/2.jpg" alt="kids">
            <h3> Нейробаланс</h3>
            <hr>
            <img src="img/nano.png" alt="nano">
            <p>Cовместно с Институтом Нейрофизиологической Психологии (Англия) мы реализуем программу «Нейробаланс». Специалисты Института исследуют индивидуальный нейромоторный статус ребенка: актуальное функциональное состояние вестибулярной, проприоцептивной, зрительной систем. Оценка происходит с помощью специально разработанных тестов. По результатам тестирования формируются индивидуальные рекомендации.</p>
            <img class="img-kids" src="img/5.jpg" alt="kids">
          </div>
          <div class="content-box-info box-2-border">
          </div>
          <div class="content-box-info box-3">
            <h3> Йога</h3>
            <hr>
            <img src="img/yoda.png" alt="yoga">
            <p>Детская йога - это сказочные истории по утрам до завтрака 2 раза в неделю. Вместе с обезьянкой ребята путешествуют по джунглям, встречают черепах и собак, восходят на горы. Слушая сказки про обезьянку Йоги, дети выполняют ассаны, развивающие координацию, гибкость, равновесие, обучаются технике дыхания. Дети знакомятся с возможностями своего тела. Развивается координация и пластика.</p>
            <img class="img-kids" src="img/4.jpg" alt="kids">
            <h3>Cвободная деятельность</h3>
            <hr>
            <img src="img/dice.png" alt="dice">
            <p>Весь день дошкольника расписан по часам, а то и по минутам. Одно занятие сменяется другим. И очень мало остается времени на проявление "Самостоятельности". Мы нашли формат работы для выхода из этой ситуации и создали в детском саду Центры свободной деятельности. Центры свободной деятельности работают один раз в неделю. Все дети в начале недели уже знают, какие центры будут работать и самостоятельно планируют свою деятельность на вторую половину дня.</p>
            <img class="img-kids" src="img/6.jpg" alt="kids">
          </div>
          <aside class="side-bar">
            <h2>ЧИТАЙТЕ ТАКЖЕ</h2>
            <hr class="first-hr">
            <div class="article">
              <a href="#">"Как подготовить ребенка к детскому саду?"</a>
              <img src="img/how_to.jpg" alt="atricle-image">
              <hr>
            </div>
            <div class="article">
              <a href="#">"Личное пространство ребенка"</a>
              <img src="img/space.jpg" alt="atricle-image">
              <hr>
            </div>
            <div class="article">
              <a href="#">"Победа и вредные привычки, какая связь?"</a>
              <img src="img/win.jpg" alt="atricle-image">
              <hr>
            </div>
            <div class="article">
              <a href="#">"Обучение малышей английскому языку"</a>
              <img src="img/eng.jpg" alt="atricle-image">
            </div>
          </aside>
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
                <button name="reg" type="submit" class="btn btn-outline-secondary">ОТПРАВИТЬ</button>
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