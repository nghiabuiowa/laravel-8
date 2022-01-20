<?php
    class Hang {
        private $maHang;
        private $tenHang;
        private $soLuong;
        private $giaMua;
        public function __construct($maHang,$tenHang,$soLuong,$giaMua)
        {
            $this->maHang=$maHang;
            $this->tenHang=$tenHang;
            $this->soLuong=$soLuong;
            $this->giaMua=$giaMua;
        }
        public function setMaHang($maHang){
            $this->maHang = $maHang;
        }
        public function getMaHang(){
            return $this->maHang;
        }
        public function setTenHang($tenHang){
            $this->tenHang = $tenHang;
        }
        public function getTenHang(){
            return $this->tenHang;
        }
        public function setGiaMua($giaMua){
            $this->giaMua = $giaMua;
        }
        public function getGiaMua(){
            return $this->giaMua;
        }
        public function setSoLuong($soLuong){
            $this->soLuong=$soLuong;
        }
        public function getSoLuong(){
            return $this->soLuong;
        }
        public function __toString()
        {
            return "Ma Hang: ".$this->maHang." Ten Hang: ".$this->tenHang." So Luong: ".$this->soLuong. "Gia Mua: ".$this->giaMua;
        }
    }
?>