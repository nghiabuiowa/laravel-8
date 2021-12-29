<?php
    $Sau='ab34bc';
    $num=[1,2,3,4,5,6,7,8,9];
    $Sau = strrev($Sau);
    $Sau = str_replace($num, '',$Sau);
    echo($Sau);
?>