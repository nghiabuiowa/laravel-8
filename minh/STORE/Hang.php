<?php
class Hang
{   
    public $maHang;
    public $tenHang;
    public $giaMua;
    public $soLuong;

    public function __construct($maHang,$tenHang,$soLuong,$giaMua)
    {
        $this->maHang=$maHang;
        $this->tenHang=$tenHang;
        $this->giaMua=$giaMua;
        $this->soLuong=$soLuong;
    }

    public function setmaHang ($maHang)
    {
        $this->maHang=$maHang;
    }
    public function getmaHang()
    {
        return $this->maHang;
    }

    public function settenHang ($tenHang)
    {
        $this->tenHang=$tenHang;
    }
    public function gettenHang()
    {
        return $this->tenHang;
    }

    public function setsoLuong ($soLuong)
    {
        $this->soLuong=$soLuong;
    }
    public function getsoLuong()
    {
        return $this->soLuong;
    }

    public function setgiaMua ($giaMua)
    {
        $this->giaMua=$giaMua;
    }
    public function getgiaMua()
    {
        return $this->giaMua;
    }

    public function toString()
    {
        return json_encode($this);
    }
}
?>