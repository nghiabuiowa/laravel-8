<?php
require "Person.php";
class Employee extends Person{
        private $mail;
        private $phone;
        private $tencty;

        public function __construct($name,$tuoi,$diachi,$mail,$phone,$tencty)
        {
            Person::__construct($name,$tuoi,$diachi);
            $this->mail=$mail;
            $this->phone=$phone;
            $this->tencty=$tencty;
        }

        public function setmail ($mail)
        {
            $this->mail=$mail;
        }
        public function getmail()
        {
            return $this->mail;
        }

        public function setphone ($phone)
        {
            $this->phone=$phone;
        }
        public function getphone()
        {
            return $this->phone;
        }

        public function settencty ($tencty)
        {
            $this->tencty=$tencty;
        }
        public function gettencty()
        {
            return $this->tencty;
        }

        public function toString()
        {
            return Person::__toString().
            "Gmail:". $this->mail.
            "phone:". $this->phone.
            "tencty:". $this->tencty;
        }
    }
?>