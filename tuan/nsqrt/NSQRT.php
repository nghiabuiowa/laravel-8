<?php
    $Arrays = array(3,2,1,4,5);
    
    function square($b){
        $sqr=sqrt($b);
        if($sqr*$sqr==$b){
            return true;
        }
        return false;
    }
    function Nsqr($Arrays){
        for($i=0;$i<count($Arrays);$i++){
            if(square($Arrays[$i])==false){
                echo(' '.$Arrays[$i]);
            }
        }
    }
    Nsqr($Arrays);
?>