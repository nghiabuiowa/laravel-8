<?php
    $number= array(3,2,1,4,5);
    for ($i=0; $i<count($number); $i++)
    {   
        if(scp($number[$i])==false)
        echo' '.$number[$i];
    }
    function scp($n)
    {
        $sqr=sqrt($n);
        if($sqr*$sqr==$n)
            return true;
        return false;
    }
?>