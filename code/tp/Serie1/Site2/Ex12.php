<?php

$code = 77000;
$suite_code = 0;
while($suite_code>=0 && $suite_code<=999 ){
    echo $code + $suite_code . '<br>';
    $suite_code ++;
}
?>