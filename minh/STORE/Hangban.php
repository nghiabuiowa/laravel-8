<?php
require 'Hang.php';
class Hangban extends Hang
{
    public $giaBan;
    public $khachHang;

    public function __construct($hang,$giaBan,$khachHang)
    {
        Hang::__construct($hang->getmaHang(),$hang->gettenHang(),$hang->getsoLuong(),$hang->getgiaMua());
        $this->giaBan=$giaBan;
        $this->khachHang=$khachHang;
    }

    public function setgiaBan ($giaBan)
    {
        $this->giaBan=$giaBan;
    }
    public function getgiaBan()
    {
        return $this->giaBan;
    }

    public function setkhachHang ($khachHang)
    {
        $this->khachHang=$khachHang;
    }
    public function getkhachHang()
    {
        return $this->khachHang;
    }

    public function toString()
    {
        return json_encode($this);
    }
}
?>