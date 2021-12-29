<?php
    //Cách 1
    /*$number=array(1,2,3,4);
    $max=$number[0];
    for ($i=0;$i<count($number);$i++)
    {   
        if($max<$number[$i])
        {
            $max=$number[$i];
        }
    }
    echo''.$max;*/
    
    //Cách 2

    function GTLN(...$number)
    {   
        $max=$number[0];
        foreach($number as $value)
        {
            if($max<$value)
                $max=$value;
        }
        return $max;
    }
    echo GTLN(1,2,3,4);
?>
