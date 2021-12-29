<?php
    $a = 2;
    $b = 1;
    $c = 3;
    $d = 4;
    $min = 0;
   
    function sum($a, $b, $c, $d, $min)
    {
        /*if ($a<$b && $a<$c && $a<$d) {
            $min = $a;
        }
        if ($b<$a&&$b<$c&&$b<$d) {
            $min=$b;
        }
        if ($c<$d && $c<$a && $c<$b) {
            $min=$c;
        }
        if($d<$a&&$d<$b&&$d<$c){
            $min=$d;
        }*/
        $min = $a;
        if($min>$b){
            $min = $b;
        }
        if($min>$c){
            $min = $c;
        }
        if($min>$d){
            $min =$d;
        }
        echo($min);
    }
    //echo("Giá trị bé nhất là: $min");
    sum($a,$b,$c,$d,$min);
//}
?>