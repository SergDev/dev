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
$trueAnswer = ["1", "1", "1"];
session_start();
if ((isset($_SESSION["test"])) and ($_SESSION["test"] == "3") and isset($_POST["question3"])) {
    $_SESSION["test1"][] = $_POST["question3"][0];
    $countQuestion = count($_SESSION["test1"]);
    $countOfTrueAnswer = 0;
    for ($i = 0; $i < $countQuestion; $i++){
        if ($_SESSION["test1"][$i] == $trueAnswer[$i]) {
            $countOfTrueAnswer++;
            }
    }
    session_destroy();
    Echo "Правильных ответов ".$countOfTrueAnswer."<br>";
}else{
    echo "Начните с <a href=\"1.php\">первого вопроса.</a>";
}
echo "Пройти тест <a href=\"1.php\">заново.</a>"
?>
<body>
</body>
</html>