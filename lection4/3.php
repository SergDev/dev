<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
session_start();

if ((isset($_SESSION["test"])) and ($_SESSION["test"]== "2")) {?>
    <form action="#" method="POST">
        <p>question</p>
        <input type="radio" name="question3" value="1">Правильный ответ<br>
        <input type="radio" name="question3" value="2">Не правильный ответ<br>
        <input type="radio" name="question" value="3">Не правильный ответ<br>
        <input type="submit" value="Next">
    </form>
    <?php
}else{
    echo "Начните с первого вопроса";
//    header('Location: http://www.example.com/');
}

$_SESSION['test']="3";

?>




<body>



</body>
</html>