<?php
$variable = 'Test';
if(is_numeric($variable)){
    echo var_dump($variable);
}
else{
    echo gettype($variable);
}
?>