<?php

$curentDir = "./1/2";

//$dir1 = scandir("$curentDir");


//var_dump($arrDir);



allSizeOfFile($curentDir);

function allSizeOfFile($curentDir) {

    $dir2 = scandir("$curentDir");

    foreach ($dir2 as $value) {
        echo "$value <br>";
        if (is_file($curentDir."/".$value)){
            //echo "$value";
            $arr[] = array("curentDir" => $curentDir, "fileName" => $value);
            //echo "$value";
        }

        if (is_dir($curentDir."/".$value)) {
            if (($value == ".") or ($value == "..")){}else

                $arrDir[] = array("curentDir" => $curentDir, "fileName" => $value);

        }


    };

//    echo "<hr>";
    $SizeOfFile = 0;

    foreach ($arr as $key => $value) {
        // echo $value["curentDir"]."/".$value["fileName"]."<br>";
        $SizeOfFile += filesize($value["curentDir"]."/".$value["fileName"]);
    }
    $kbSize = round($SizeOfFile/1024, 2);
    echo  "Directory ".$value['curentDir']."  --  ".$kbSize." kb";

    foreach ($arrDir as $key => $value) {

        allSizeOfFile($value["curentDir"]."/".$value["fileName"]);

        // echo $value["curentDir"]."/".$value["fileName"]."<br>";
        $SizeOfFile += filesize($value["curentDir"]."/".$value["fileName"]);
    }
    $kbSize = round($SizeOfFile/1024, 2);
    $arr3[]=
    echo  "Directory ".$value['curentDir']."  --  ".$kbSize." kb <br> <hr>";


//    allSizeOfFile($arrDir);
}

?>


