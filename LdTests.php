<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>
<?php
    include "menu.php";
?>
    
    <main class="section">
        <div class="container">
            <h2 class="title-1">Список тестов</h2>
            <ul class="professions" id="professions">
                <!--Test 2-->
                <li class="profession">
                    <a href="Lab2-reaction_to_light.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Реакция на свет</h3>
                    </a>
                </li>
                
                <li class="profession">
                    <a href="Lab2-color_test.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на восприятие света</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab3-simple_circle.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест с кругами (простой)</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab3-hard_circle.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест с кругами (сложный)</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab2-visual_test.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на визуальное восприятие</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab4-chase.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Преследование</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab4-tracking.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Отслеживание</h3>
                    </a>
                </li>

                <!--Test 5-->
                <li class="profession">
                    <a href="Lab5-attention.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на внимание</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab5-memory.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на память</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab5-thinking.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на мышление</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab2-simple_sound.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на звук(простой)</h3>
                    </a>
                </li>
                <li class="profession">
                    <a href="Lab2-hard_sound.php">
                        <img src="./img/green.jpeg" alt="Test img" class="img">
                        <h3 class="profession__title">Тест на звук (сложный)</h3>
                    </a>
                </li>
            </ul>
        </div>
    </main>

    <script src="./js/app.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>