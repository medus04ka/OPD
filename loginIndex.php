<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<?php
  include "menu.php";
?>

    <div class="container">
      <div class="title" style="font-size: 70px; font-weight: 500; color: black; margin: 100px; font-style: italic;">Войти в систему</div>
      <div class="content">
        <form action="http://localhost:8888/backend/login.php" method=post>
          <div class="user-details">
            <div class="input-box">
              <span class="details">Логин в системе</span>
              <input name="name" type="text" placeholder="Введите логин" required>
            </div>
            <div class="input-box">
              <span class="details">Пароль</span>
              <input name="pass" type="password" placeholder="Введите свой пароль" required>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>
  <script src="./js/menu.js"></script>
  </body>
</html>

