<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="http://localhost:8888/../css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
    <?php
    session_start();
    if($_SESSION["type"]!=3)
        {
            $_SESSION['error'] = "У вас недостаточно прав для просмотра этой страницы!";
    header('Location: '. 'http://localhost:8888/admin/Admin-error.php');
    exit();
        }
    ?>
    
<?php
    include "Admin-menu.php";
?>

    <header class="header">
        <div class="header__wrapper">
            <h1 class="header__title" style="color: #000; border-bottom: 1px solid #000000;">
                ВСЕ ПРОФЕССИИ
            </h1>
        </div>
    </header>

    <main class="section">
        <div class="container">
            <ul class="professions" id="professions">
                <li class="profession">
                    <a href="http://localhost:8888/admin/admin-prof-page.html">
                        <img src="http://localhost:8888/img/professions/prof1.png" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Аналитик данных</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="http://localhost:8888/admin/admin-prof-page.html">
                        <img src="http://localhost:8888/img/professions/prof1.png" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Системвный администратор</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="http://localhost:8888/admin/admin-prof-page.html">
                        <img src="http://localhost:8888/img/professions/prof1.png" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Специалист технической поддержки</h3>
                    </a>
                </li>
            </ul>
        </div>
    </main>

    <script src="http://localhost:8888/js/Admin-home.js"></script>
    <script src="../js/menu.js"></script>
</body>
</html>