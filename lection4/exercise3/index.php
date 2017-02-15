<?php
$FILE_NAME_WHITH_LOGIN = "pass.txt";
session_start();

if ((isset($_POST["login"])) and (isset($_POST["password"]))){
    if (file_exists($FILE_NAME_WHITH_LOGIN)){
        $lineOfFile = file($FILE_NAME_WHITH_LOGIN);
        if (($_POST["login"] == trim($lineOfFile[0])) and ($_POST["password"] == trim($lineOfFile[1]))){
            if ($_POST["fogot"] == "on"){
                $_SESSION["Login"] = true;
            }else{
                $_SESSION["Login"] = true;
                setcookie("login", "off", time()+3600*24);
            }
            header("Location: success.php");
        }
    }else{
        echo "Hе найден файл";
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_SESSION["Login"]) && $_SESSION["Login"] == true) {
    echo "Этот текст только для авторизованых пользователей";
    ?>
    <form action="logout.php" method="post">
        <button name="logout">Logout</button>
    </form>
    <?php
}else{?>
<form action="" method="post" name="loginForm">
    <input type="text" name="login"><label>Login</label><br>
    <input type="password" name="password"><label>Password</label><br>
    <input type="submit" value="Enter"><br>
    <input type="checkbox" name="fogot"><label>Don't remember me</label><br>
</form>
<?php
}
?>

</body>
</html>

