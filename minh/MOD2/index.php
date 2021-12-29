<?php
    //Cách 1
    /*$number=array(2,3,1,4);
    for ($i=0;$i<count($number);$i++)
    {   
        if(!($number[$i]%2==0))
        {
            echo' '. $number[$i];
        }
    }
    */

    //Cách 2

    function G(...$number)
    {   
        foreach($number as $value)
        {
           if (!($value%2==0))
                echo' '.$value;
        }   
    }
    G(2,3,1,4);
?>