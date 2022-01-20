<?php
    class Cuahang{
        public $lishHang;
        public $lishKhang;
        public $lishHangBan;

        public function __construct($lishHang,$lishKhang,$lishHangBan)
        {
            $this->lishHang=$lishHang;
            $this->lishHangBan=$lishHangBan;
            $this->lishKhang=$lishKhang;
        }
        public function getLishHang(){
            return $this->lishHang;
        }
        public function getLishKhang(){
            return $this->lishKhang;
        }
        public function getHangBan(){
            return $this->lishHangBan;
        }
        public function toString()
        {
            $this->getSortSoLuong();
            $this->getSortLoiNhuan();
            return json_encode($this);
        }
        public function getLoiNhuan()
        {
            $sum =0;
            foreach($this->lishHangban as $loiNhuan){
                $sum =$sum +($loiNhuan->getGiaBan() - $loiNhuan->getGiaMua())*$loiNhuan->getSoLuong();
            }
            return $sum;
        }
        public function getSortSoLuong(){
            for($i=0;$i<count($this->lishHang);$i++){
                for($j=0;$j<count($this->lishHang);$j++){
                    if($this->lishHang[$i]->getSoLuong()<$this->lishHang[$j]->getSoLuong()){
                        $temp=$this->lishHang[$i];
                        $this->lishHang[$i]=$this->lishHang[$j];
                        $this->lishHang[$j]=$temp;
                    }
                }
            }  
        }
        public function getSortLoiNhuan(){
            for($i=0;$i<count($this->lishHangBan);$i++){
                for($j=0;$j<count($this->lishHangBan);$j++){
                    if($this->lishHangBan[$i]->getSoLuong()*($this->lishHangBan[$i]->getGiaBan()-$this->lishHangBan[$i]->getGiaMua())>$this->lishHangBan[$j]->getSoLuong()*($this->lishHangBan[$j]->getGiaBan()-$this->lishHangBan[$j]->getGiaMua())){
                        $temp=$this->lishHangBan[$i];
                        $this->lishHangBan[$i]=$this->lishHangBan[$j];
                        $this->lishHangBan[$j]=$temp;
                    }
                }
            }
        }
        public function getMaxLoiNhuan(){
            $khachNam=null;
            $khachNu=null;
            foreach($this->lishHangban as $hang){
                if($hang->getKhachHang()->gioiTinh=="Nam"){
                    $khachNam=$hang->getKhachHang();
                }else{
                    $khachNu=$hang->getKhachHang();
                }
            }
            return (object)["khach hang nam dem lai loi nhuan lon nhat: "=>$khachNam," Khach hang nu dem lai loi nhuan loi nhat: "=>$khachNu];
        }
        public function getMaxLoiIch(){
            $khachhang1 = null;
            foreach($this->lishHangban as $hang){
                $khachhang1=$hang->getKhachhang();
            }
            return (object)[" Khach hang loi nhuan lon nhat: "=>$khachhang1];
        }
    }
?>