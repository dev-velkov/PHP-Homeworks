<?php
$n = 1234;
$counter = 0;
for ($i = 102; $i <= $n; $i++) {
    if($i > 999) {
        break;
    }
    $firstDigit = (int)($i % 10);
    $secondDigit = (int)(($i / 10) % 10);
    $thirdDigit = (int)($i / 100);

    if($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit) {
        echo $i . ', ';
        $counter++;
    }
}
if($counter == 0){
    echo 'No';
}
?>