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
      <div class="title" style="font-size: 70px; font-weight: 500; color: black; margin: 100px; padding-bottom: 50px; font-style: italic;">Зарегистрироваться</div>
      <div class="content">
        <form action="http://localhost:8888/backend/register.php" id="log-form" method=post>
          <div class="user-details">
            <div class="input-box">
              <span class="details">Логин</span>
              <input name="login" type="text" placeholder="Введите имя пользователя" required>
            </div>
            <div class="input-box">
              <span class="details">Фамилия и имя</span>
              <input name="name" type="text" placeholder="Ваше имя" required>
            </div>
            <div class="input-box">
              <span class="details">Пароль</span>
              <input name="pass" type="password" placeholder="Введите свой пароль" required>
            </div>
            <div class="input-box">
              <span class="details">Возраст</span>
              <input name="age" type="number" placeholder="Введите ваш возраст" required>
            </div>
            <div class="input-box">
              <span class="details">Пол</span>
              <select id="gender" name="gender">
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
              </select>
            </div>
          <div class="button">
            <input type="submit" value="Зарегистрироваться">
          </div>
        </form>
      </div>
    </div>

  <script src="./js/menu.js"></script>
  </body>
</html>

