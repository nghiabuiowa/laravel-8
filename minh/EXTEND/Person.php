<?php
class Person
    {
        private $name;
        private $tuoi;
        private $diachi;

        public function __construct($name,$tuoi,$diachi)
        {
            $this->name=$name;
            $this->tuoi=$tuoi;
            $this->diachi=$diachi;
        }

        public function setname ($name)
        {
            $this->name=$name;
        }
        public function getname()
        {
            return $this->name;
        }

        public function settuoi ($tuoi)
        {
            $this->tuoi=$tuoi;
        }
        public function gettuoi()
        {
            return $this->tuoi;
        }

        public function setdiachi ($diachi)
        {
            $this->diachi=$diachi;
        }
        public function getdiachi()
        {
            return $this->diachi;
        }

        public function __toString()
        {
            return "Name:". $this->name.
            "tuoi:". $this->tuoi.
            "diachi:". $this->diachi;
        }
    }
?>
