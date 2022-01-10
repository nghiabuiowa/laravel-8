<?php
require "Employee.php";
class Developer extends Employee
{
    private $vitri;
    private $linhvuc;
    private $hesoluong;
    private $luongcoban;
    private $object=[];

    public function __construct($name,$tuoi,$diachi,$mail,$phone,$tencty,$vitri,$linhvuc,$hesoluong,$luongcoban)
    {
        Employee::__construct($name,$tuoi,$diachi,$mail,$phone,$tencty);
        $this->vitri=$vitri;
        $this->linhvuc=$linhvuc;
        $this->hesoluong=$hesoluong;
        $this->luongcoban=$luongcoban;
    }

    public function setvitri ($vitri)
    {
        $this->vitri=$vitri;
    }
    public function getvitri()
    {
        return $this->vitri;
    }

    public function setlinhvuc ($linhvuc)
    {
        $this->linhvuc=$linhvuc;
    }

    public function sethesoluong ($hesoluong)
    {
        $this->hesoluong=$hesoluong;
    }

    public function setluongcoban ($luongcoban)
    {
        $this->luongcoban=$luongcoban;
    }

    /*public function getluong()
    {
        $object=(object) [
            'hesoluong'=>$this->hesoluong,
            'luongcoban'=>$this->luongcoban,
        ];
    }*/

    public function getLuong()
    {
        return new Developer(){
                        $this->luongcoban;
                        $this->hesoluong;
                   };
    }

    public function toString()
    {
        return Employee::__toString().
        "vitri:". $this->vitri.
        "linhvuc:". $this->linhvuc.
        "hesoluong:". $this->hesoluong.
        "luongcoban:". $this->luongcoban;

    }
}
?>