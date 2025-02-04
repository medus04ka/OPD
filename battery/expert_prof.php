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

    <header class="header">
        <div class="header__wrapper">
            <h1 class="header__title">
                Skills
            </h1>
            <div class="header__text">
                Выберете 7 качеств для профессии  
            </div>
            <button class="submit btn btn-outline-success" disabled>Отправить</button>
        </div>
    </header>

    <!-- job_listing_area_start  -->
    <main class="section">

        <div class="container" id="internals">
            <h3 class="category__title">Категория 1</h3>
                <ul class="job_lists">
                    <li class="single_jobs">
                        <div class="jobs_left">
                            <div class="jobs_conetent">
                                <h4>Качество бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла бла</h4>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                            </div>
                        </div>
                    </li>
                    <li class="single_jobs">
                        <div class="jobs_left">
                            <div class="jobs_conetent">
                                <h4>Качество</h4>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                            </div>
                        </div>
                    </li>
                    <li class="single_jobs"><div class="jobs_left"><div class="jobs_conetent"><h4>Качество</h4></div></div><div class="jobs_right"><div class="apply_now"><a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a></div></div></li>
                    <li class="single_jobs">
                        <div class="jobs_left">
                            <div class="jobs_conetent">
                                <h4>Качество</h4>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                            </div>
                        </div>
                    </li>
                </ul>
            <h3 class="category__title">Категория 2</h3>
                <ul class="job_lists">
                    <li class="single_jobs">
                        <div class="jobs_left">
                            <div class="jobs_conetent">
                                <h4>Качество</h4>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                            </div>
                        </div>
                    </li>
                    <li class="single_jobs">
                        <div class="jobs_left">
                            <div class="jobs_conetent">
                                <h4>Качество</h4></a>
                            </div>
                        </div>
                        <div class="jobs_right">
                            <div class="apply_now">
                                <a class="heart_mark" href="#"> <i class="fa fa-heart"></i> </a>
                            </div>
                        </div>
                    </li>
                </ul>
        </div>
    </main>
    <!-- job_listing_area_end  dsddfdds-->
    <script src="http://localhost:8888/./js/app.js"></script>
    <script src="http://localhost:8888/./js/expert.js"></script>
    <script src="http://localhost:8888/./js/expertcheckbox.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>
