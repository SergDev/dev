<?php
session_start();
if ((isset($_COOKIE["login"]) && ($_COOKIE["login"] == "off")) or (isset($_SESSION["Login"]) && $_SESSION["Login"] == true)) {
    echo "Этот текст только для авторизованых пользователей";
    ?>
    <form action="logout.php" method="post">
        <button name="logout">Logout</button>
    </form>
    <?php
}else{
    echo "Вы не авторизованы. Пройдите <a href=\"index.php\">авторизацию</a>";
}
