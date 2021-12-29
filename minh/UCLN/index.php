<?php
    function UCLN($a,$b)
    {
        if($b==0)
            return $a;  
        return UCLN($b,$a%$b);    //
    } 
    echo("UCLN là: ".UCLN(12,20));
?>