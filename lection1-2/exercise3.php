<?php
$fileName = ["index", "Add", "New", "file", "SomeNameFile"];
$fileExtension = ["php", "html", "txt", "plain", "someExtension"];
$fileOpen = fopen($fileName[mt_rand(0, count($fileName) - 1)].".".$fileExtension[mt_rand(0, count($fileExtension) - 1)], "w") or die();
fputs($fileOpen, rand());
fclose($fileOpen);