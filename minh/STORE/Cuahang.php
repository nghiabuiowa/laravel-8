<?php
class Cuahang
{
    public $listKh;
    public $listHang;
    public $listHangban;

    public function __construct($listHang,$listHangban,$listKh)
    {
        $this->listHang=$listHang;
        $this->listHangban=$listHangban;
        $this->listKh=$listKh;
    }

    public function getlistKh()
    {
        return $this->listKh;
    }

    public function getlistHang()
    {
        return $this->listHang;
    }

    public function getlistHangban()
    {
        return $this->listHangban;
    }

    public function toString()
    {   
        $this->getSortSoluong();
        $this->getSortProfit();
        return json_encode($this);    
    }

    public function getProfit()
    {
        $profit=0;
        foreach ($this->listHangban as $value)
        {
            $profit+=($value->getgiaBan()-$value->getgiaMua())*$value->getsoLuong();
        }
        return $profit;
    }

    public function getSortSoluong()
    {
        for ($i=1;$i<count($this->listHang);$i++)
        {
            for ($j=$i+1;$j<count($this->listHang);$j++)
            {
                if ($this->listHang[$i]->getsoLuong()<$this->listHang[$j]->getsoLuong())
                {
                    $t=$this->listHang[$i];
                    $this->listHang[$i]=$this->listHang[$j];
                    $this->listHang[$j]=$t;          
                }
            }
        }
    }

    public function getSortProfit()
    {
        for ($i=1;$i<count($this->listHangban);$i++)
        {
            for ($j=$i+1;$j<count($this->listHangban);$j++)
            {
                if ($this->listHangban[$i]->getsoLuong()*($this->listHangban[$i]->getgiaBan()-$this->listHangban[$i]->getgiaMua())>$this->listHangban[$j]->getsoLuong()*($this->listHangban[$j]->getgiaBan()-$this->listHangban[$j]->getgiaMua()))
                {
                    $t=$this->listHangban[$i];
                    $this->listHangban[$i]=$this->listHangban[$j];
                    $this->listHangban[$j]=$t;          
                }
            }
        }
    }

    public function getmaxprofit()
    {
        $khNam=null;
        $khNu=null;
        foreach ($this->listHangban as $value)
        {
            if ($value->getkhachHang()->gioiTinh=="Nam")
            {
                $khNam=$value->getkhachHang();
            }
            else
            {
                $khNu=$value->getkhachHang();
            }
        }
        return(object)
            [
                "kh nam dem loi nhuan lon nhat" => $khNam,
                "kh nu dem loi nhuan lon nhat" => $khNu,
            ];
    }

    public function getmaxspend()
    {
        $khachHangMoi=null;
        foreach ($this->listHangban as $value)
            $khachHangMoi=$value->getkhachHang();
        return (object)[   
            "kh dem loi nhuan lon nhat" => $khachHangMoi,
        ];  
    }
} 
?>