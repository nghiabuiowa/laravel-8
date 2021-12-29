<?php
    //echo("Nhập số phần tử trong mảng: "."\n");
    //$N =fgets(fopen('php://stdin','r'));
    $A=[1,2,3,4];
    function swap($A){
    $temp = $A[0];
        for($i=1;$i<count($A);$i++){
        //foreach($A as $A){
            if($temp<$A[$i]){
                $temp=$A[$i];
            }
        }
        echo("Gia tri max la: ".$temp);
    }
    swap($A);
?>