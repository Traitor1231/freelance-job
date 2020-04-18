<!DOCTYPE html>
<html>

<head>
  <title>Регистрация</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reg.css">
</head>

<body>
  <div class="reg-container">
        <form action="requests/save_user.php" method="post" required>
           <h2>РЕГИСТРАЦИЯ</h2>
          <div class="form-input-wrapper">
            <input input type='text' name='FIO' required class="form-control" id="inputFIO" placeholder="ФИО">
          </div>
          <div class="form-input-wrapper">
            <input input type="text" name="email" required class="form-control" id="inputemail" placeholder="Почта">
          </div>
          <div class="form-input-wrapper">
            <input input type="text" name="login" required class="form-control" id="inputLogin" placeholder="Логин">
          </div>
          <div class="form-input-wrapper ">
            <input type="password" name="password" required class="form-control" id="inputPassword" placeholder="Пароль">
          </div>
          <div class="form-input-wrapper">
            <input input type="date" name="birthday" required class="form-control" id="inputbirthday" placeholder="Дата рождения">
          </div>
          <div class="form-input-wrapper">
            <input input type="password" name="verifypass" required class="form-control" id="inputverifypass" placeholder="Введите пароль повторно">
          </div>
          <div class="form-input-wrapper">
            <input type="text" name="phone" required class="form-control" id="inputphone" placeholder="Телефон">
          </div>
          <div class="registration-warpper">
            <button name='reg' type="submit" class="btn right">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            <button type="submit" onClick='location.href="auth.php"'class="btn top">НАЗАД</button>
            <div>
        </form>
  </div>
</body>
</html>