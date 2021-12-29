<?php
    $a = 12;
    $b = 20;
    
    function ucln($a,$b){
        if($a==0){
            return $b;
        }
        return ucln($b%$a,$a);
    }
    echo(ucln($a,$b)) ;
?>