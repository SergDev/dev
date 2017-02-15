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

if ((isset($_SESSION["test"])) and ($_SESSION["test"] == "2") and isset($_POST["question2"])) {
    $_SESSION["test1"][] = $_POST["question2"][0];
    $_SESSION['test']="3";
    ?>
    <form action="result.php" method="POST">
        <p>Question 3</p>
        <input type="radio" name="question3" value="1">Правильный ответ<br>
        <input type="radio" name="question3" value="2">Не правильный ответ<br>
        <input type="radio" name="question3" value="3" checked>Не правильный ответ<br>
        <input type="submit" value="Next">
    </form>
    <?php
}else{
    echo "Начните с <a href=\"1.php\">первого вопроса.</a>";
}
?>
<body>
</body>
</html>