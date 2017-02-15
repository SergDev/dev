<?php
$lineOfFile = file("data.txt");
asort($lineOfFile);
foreach ($lineOfFile as $value) {
    echo $value;
}