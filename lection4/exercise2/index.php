<?php
session_start();
if (!isset($_SESSION["imgName"])) {
    $_SESSION["imgName"] = "sports" . rand(1, 6) . ".jpeg";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="<?php echo $_SESSION["imgName"]?>" alt="">
</body>
</html>



