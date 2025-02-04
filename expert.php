<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert</title>
    <link rel="stylesheet" href="http://localhost:8888/./css/main.css">
    <link rel='stylesheet' href="http://localhost:8888/resources/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
</head>
<body>
    <?php 
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['error'] = "[RIGHTS] Вам запрещен доступ на эту страницу!";
        header('Location: '. 'http://localhost:8888/error.php');
        exit();
    }
    ?>
<?php
    include "menu.php";
?>
    <main class="section">
        <div class="container">
            <h2 class="title-1">Выберите профессию для оценки!</h2>
            <ul class="professions" id="professions">
                <li class="profession">
                    <a href="Lab1-expert_prof.php">
                        <img src="./img/professions/prof1.jpeg" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Аналитик данных</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab1-expert_prof.php">
                        <img src="./img/professions/prof1.jpeg" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Системный администратор</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab1-expert_prof.php">
                        <img src="./img/professions/prof1.jpeg" alt="Profession img" class="profession__img">
                        <h3 class="profession__title">Специалист технической поддержки</h3>
                    </a>
                </li>
                <li class="profession">
                    <img src="./img/professions/prof1.jpeg" alt="Profession img" class="profession__img">
                    <h3 class="profession__title">Unknown</h3>
                </li>
                <li class="profession">
                    <img src="./img/professions/prof1.jpeg" alt="Profession img" class="profession__img">
                    <h3 class="profession__title">Unknown</h3>
                </li>
                <li class="profession">
                    <img src="./img/professions/prof1.jpeg" alt="Profession img" class="profession__img">
                    <h3 class="profession__title">Unknown</h3>
                </li>
            </ul>
        </div>
    </main>
    <!-- job_listing_area_end-->
    <script src="./js/app.js"></script>
    <script src="./js/expert-chose.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>
