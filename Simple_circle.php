<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Circle</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/simple-circle.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>
<?php
    include "menu.php";
?>
    <div id="time-input">
		Время исследования: <input type="number" id="minutes" min="0" max="45"> минут
		<input type="number" id="seconds" min="0" max="59"> секунд
	</div>
	<div id="start">
		<button id="start">Начать</button>
	</div>
	<div id="container">
            <div id="circle2">
                <div class="point"></div>
            </div>
            <p></p>
            <div id="circle">
                <div id="pointer"></div>
            </div>
    </div>    

	<div id="end" class="hidden">Исследование завершено</div>
	<div id="user-result">Result: <span id="result"></span></div>    
    <div class="container">
            <div class="score" style="background: #FFF5EE;">
                <div class="section-0">
                
                </div>
            </div>
    </div>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./js/simple-circle.js"></script>
<script src="./js/menu.js"></script>
</body>

</html>
