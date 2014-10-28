<?php
$month = date("F");
$year = date("Y");
$daysInMonth = date("t");

for($i = 1; $i <= $daysInMonth; $i++) {
    $date = strtotime("$i $month $year");
    if(date("l", $date) == "Sunday") {
        echo date("jS F, Y", $date) . "\n";
    }
}
?>