<?php
$someSentence = "123456789 123 123456 1234567 Сохраните в переменную текст, в котором больше 10 слов, с них несколько случайно расположенных слов, которые длиннее 8 символов. (Текст можно брать рыбий или случайный набор символов).";
echo "$someSentence <br>";
$newSentence = explode(" ", $someSentence);
$someSentence = "";
for ($i = 0; $i < count($newSentence); $i++) {

    if (iconv_strlen($newSentence[$i]) <= 6) {
        $someSentence .= "$newSentence[$i] ";
    } else {
        $newSentence[$i] = mb_substr($newSentence[$i], 0, 6);
        $someSentence .= "$newSentence[$i]. ";
    }
}
echo $someSentence;
