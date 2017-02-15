<?php
$months = array('Января', 'Февраля', 'Марта', 'Апреля', 'Мая', 'Июня', 'Июля', 'Августа', 'Сентября', 'Октября', 'Ноября', 'Декабря');
$nowdate = getdate();
$holiday = ["6", "0", "1.1", "7.1", "8.3", "31.1", "1.2", "2.2", "3.2", "4.2"];
echo "Сегодня ", $nowdate['mday'], " ", $months[$nowdate['mon']-1]." ".$nowdate['hours'].":".$nowdate['minutes']." <br>";
$getCurrentDateAndMonth = $nowdate['mday'].".".$nowdate['mon'];

if ($nowdate['hours']<15 and !(in_array($getCurrentDateAndMonth,$holiday) or in_array($nowdate['wday'],$holiday))) {
    echo  "Доставка сегодня";
}else {
    $i = 1;
    while ((in_array($getCurrentDateAndMonth,$holiday)) or in_array($nowdate['wday'],$holiday)){
        $nowdate = getdate(strtotime("+$i day"));
        $getCurrentDateAndMonth = $nowdate['mday'].".".$nowdate['mon'];
        $i++;
    }
    echo "Доставка ", $nowdate['mday'], " ", $months[$nowdate['mon']-1];
}
?>


