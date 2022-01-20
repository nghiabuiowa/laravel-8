<?php
    class KhachHang{
        private $ma;
        private $ten;
        private $diaChi;
        private $gioiTinh;
        private $sDT;
        public function __construct($ma,$ten,$gioiTinh,$diaChi,$sDT)
        {
            $this->ma=$ma;
            $this->ten=$ten;
            $this->gioiTinh=$gioiTinh;
            $this->diaChi=$diaChi;
            $this->sDT=$sDT;
        }
        public function setMa($ma){
            $this->ma=$ma;
        } 
        public function getMa(){
            return $this->ma;
        }
        public function setTen($ten){
            $this->ten=$ten;
        } 
        public function getTen(){
            return $this->ten;
        }
        public function setDiaChi($diaChi){
            $this->diaChi=$diaChi;
        } 
        public function getDiaChi(){
            return $this->diaChi;
        }
        public function setGioiTinh($gioiTinh){
            $this->gioiTinh=$gioiTinh;
        } 
        public function getGioiTinh(){
            return $this->gioiTinh;
        }
        public function setSDT($sDT){
            $this->sDT=$sDT;
        } 
        public function getSDT(){
            return $this->sDT;
        }
        public function __toString()
        {
            return " Ma KH: ".$this->ma." Ten: ".$this->ten." Gioi Tinh: ".$this->gioiTinh
            ." Dia Chi:".$this->diaChi." SDT: ".$this->sDT;
        }
    }
?>