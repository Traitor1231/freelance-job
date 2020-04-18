<!DOCTYPE html>
<html>

<head>
  <title>Авторизация</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">	
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/auth.css">
</head>

<body>
  <div class="auth-container">
    <form action="requests/save_auth.php" method="POST" required>
      <h2>АВТОРИЗАЦИЯ</h2>
      <hr>
      <div class="form-input-wrapper">
        <input input type="text" name="login" required class="form-control" id="inputLogin" placeholder="Логин">
      </div>
      <div class="form-input-wrapper">
        <input type="password" name="password" required class="form-control" id="inputPassword" placeholder="Пароль">
      </div>
      <button type="submit" class="btn right">ВХОД</button>
      <button type="button" onClick='location.href="index.php"' class="btn">НАЗАД</button>
    </form>
    <div class="registration-warpper">
        <a href="reg.php">Создать аккаунт</a>
    </div>
  </div>
</body>
</html>