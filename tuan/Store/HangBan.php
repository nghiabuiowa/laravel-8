<?php

require "Hang.php";
    class HangBan extends Hang{
        private $giaBan;
        private $khachHang;
        public function __construct($maHang,$tenHang,$soLuong,$gia,$giaBan,$khachHang)
        {
            Hang::__construct($maHang,$tenHang,$soLuong,$gia);
            $this->giaBan=$giaBan;
            $this->khachHang=$khachHang;
        }
        public function setGiaBan($giaBan){
            $this->giaBan=$giaBan;
        }
        public function getGiaBan(){
            return $this->giaBan;
        }
        public function setKhachHang($khachHang){
            $this->khachHang=$khachHang;
        }
        public function getKhachHang(){
            return $this->khachHang;
        }
        public function __toString()
        {
            return Hang::__toString()." Gia ban: ".$this->giaBan." Ten Khanh Hang: ".$this->khachHang;
        }
    }
?>