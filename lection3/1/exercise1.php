<?php
$fileOpen = fopen("data.txt", "r") or die();
while (!feof($fileOpen)){
    $line[] = fgets($fileOpen);
}
asort($line);
foreach ($line as $value) {
    echo $value;
}
fclose($fileOpen);
