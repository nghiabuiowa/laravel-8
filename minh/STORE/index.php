<?php
    require 'Khachhang.php';
    require 'Hangban.php';
    require 'Cuahang.php';

    $listKh=[];
    $khMinh=new KhachHang ("KH001","Minh","abc","Nam","123");
    array_push($listKh,$khMinh);
    $khTuan=new KhachHang ("KH002","Tuan","abc","Nam","456");
    array_push($listKh,$khTuan);
    $khNghia=new KhachHang ("KH003","Nghia","asa","Nam","123");
    array_push($listKh,$khNghia);
    $khNhi=new KhachHang ("KH004","Nhi","abcs","Nu","123");
    array_push($listKh,$khNhi);
    $khNha=new KhachHang ("KH005","Nha","absc","Nu","123");
    array_push($listKh,$khNha);

    $listHang=[];
    $hangVai= new Hang ("MH001","Vai",100,10000);
    array_push($listHang,$hangVai);
    $hangNho= new Hang ("MH002","Nho",200,25000);
    array_push($listHang,$hangNho);
    $hangDua= new Hang ("MH003","Dua",0,15000);
    array_push($listHang,$hangDua);

    $listHangban=[];
    $hangVai->setsoLuong(50);
    $hangban1=new Hangban ($hangVai,15000,$khNghia);
    array_push($listHangban,$hangban1);
    $hangNho->setsoLuong(100);
    $hangban2=new Hangban ($hangNho,40000,$khTuan);
    array_push($listHangban,$hangban2);
    $hangDua->setsoLuong(200);
    $hangban3=new Hangban ($hangDua,10000,$khMinh);
    array_push($listHangban,$hangban3);
    $hangDua->setsoLuong(100);
    $hangban4=new Hangban ($hangDua,10000,$khNhi);
    array_push($listHangban,$hangban4);
    $hangNho->setsoLuong(120);
    $hangban5=new Hangban ($hangNho,40000,$khNhi);
    array_push($listHangban,$hangban5);
    $hangVai->setsoLuong(250);
    $hangban6=new Hangban ($hangVai,20000,$khNha);
    array_push($listHangban,$hangban6);

    $store=new Cuahang ($listHang,$listHangban,$listKh);
    echo $store->toString();
    echo "<br />";
    echo $store->getProfit();
    echo "<br />";
    echo json_encode($store->getmaxprofit());
    echo "<br />";
    echo json_encode($store->getmaxspend());
?>