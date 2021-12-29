<?php
    $A=[2,3,1,4];
    function mod($A){
        $temp = 2;
        for($i=0;$i<count($A);$i++){
            if($A[$i] % 2 ==1){
                echo($A[$i]." ");
            }
        }
    }
    mod($A);
?>