<?php
    require 'Developer.php';
    
    $dev1=new Developer("minh","25","tran cao van","minhnguyen@","0905","fpt","fresher","PHP","1",5000);
    $dev2=new Developer("minh","25","tran cao van","minhnguyen@","0906","fpt","fresher","PHP","2",5000);
    $dev3=new Developer("minh","25","tran cao van","minhnguyen@","0907","fpt","fresher","PHP","3",5000);
    $dev4=new Developer("minh","25","tran cao van","minhnguyen@","0908","fpt","fresher","PHP","4",6000);
    $dev5=new Developer("minh","25","tran cao van","minhnguyen@","0909","fpt","fresher","PHP","5",5000);

    echo $dev1->toString();
    echo "<br/>";
    echo $dev2->toString();
    echo "<br/>";
    echo $dev3->toString();
    echo "<br/>";
    echo $dev4->toString();
    echo "<br/>";
    echo $dev5->toString();
    echo "<br/>";
?>