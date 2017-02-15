<?php
$myString = "& sajkdhakl \"jsdas\" das& df d<><>, .,>,.,.xz,c. ,\' sdf asdf $#@^%&fa dsf& sda dasd&";

myhtmlspecialchars($myString);

function myhtmlspecialchars ($someString) {

    $specialChar = array (
        array ("oldChar" => "&",
                "newChar" => "&amp;"),
        array ("oldChar" => "\"",
            "newChar" => "&quot;"),
        array ("oldChar" => "\'",
            "newChar" => "&#039;"),
        array ("oldChar" => "<",
            "newChar" => "&lt;"),
        array ("oldChar" => ">",
            "newChar" => "&gt;")
        );

    foreach ($specialChar as $key => $value){
        $someString = str_replace($value["oldChar"], $value["newChar"], $someString);
    }

    echo $someString;

}