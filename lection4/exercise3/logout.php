<?php
session_start();
if (($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST["logout"])){
    session_destroy();
    setcookie("login", time()-60);
    header("Location: index.php");
}