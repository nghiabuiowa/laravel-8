<?php
class Khachhang
{   
    public $ma;
    public $ten;
    public $diaChi;
    public $gioiTinh;
    public $soDienThoai;

    public function __construct($ma,$ten,$diaChi,$gioiTinh,$soDienThoai)
    {
        $this->ma=$ma;
        $this->ten=$ten;
        $this->diaChi=$diaChi;
        $this->gioiTinh=$gioiTinh;
        $this->soDienThoai=$soDienThoai;
    }

    public function setma ($ma)
    {
        $this->ma=$ma;
    }
    public function getma()
    {
        return $this->ma;
    }

    public function setten ($ten)
    {
        $this->ten=$ten;
    }
    public function getten()
    {
        return $this->ten;
    }

    public function setdiaChi ($diaChi)
    {
        $this->diaChi=$diaChi;
    }
    public function getdiaChi()
    {
        return $this->diaChi;
    }

    public function setgioiTinh ($gioiTinh)
    {
        $this->gioiTinh=$gioiTinh;
    }
    public function getgioiTinh()
    {
        return $this->gioiTinh;
    }

    public function setsoDienThoai ($soDienThoai)
    {
        $this->soDienThoai=$soDienThoai;
    }
    public function getsoDienThoai()
    {
        return $this->soDienThoai;
    }

    public function toString()
    {
        return json_encode($this);
    }
}
?>