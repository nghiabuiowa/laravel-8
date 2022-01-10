<?php
/*
    class Person
    {
        private $Idperson;
        private $Nameperson;
        private $Sex;
        private $Birthday;
        private $Gmail;
        private $NumberPhone=array();

        public function __construct ($Idperson, $Nameperson, $Birthday, $Gmail, $NumberPhone, $Sex="Male")
        {
            $this->Idperson=$Idperson;
            $this->Nameperson=$Nameperson;
            $this->Sex=$Sex;
            $this->Birthday=$Birthday;
            $this->Gmail=$Gmail;
            $this->NumberPhone=$NumberPhone;
        }
        public function setIdperson ($Idperson)
        {
            $this->Idperson=$Idperson;
        }
        public function getIdperson()
        {
            return $this->Idperson;
        }

        public function setNameperson ($Nameperson)
        {
            $this->Nameperson=$Nameperson;
        }
        public function getNameperson()
        {
            return $this->Nameperson;
        }

        public function setSex ($Sex)
        {
            $this->Sex=$Sex;
        }
        public function getSex()
        {
            return $this->Sex;
        }

        public function setBirthday ($Birthday)
        {
            $this->Birthday=$Birthday;
        }
        public function getBirthday()
        {
            return $this->Birthday;
        }

        public function setGmail ($Gmail)
        {
            $this->Idperson=$Gmail;
        }
        public function getGmail()
        {
            return $this->Gmail;
        }

        public function setNumberphone ($NumberPhone)
        {
            $this->NumberPhones=$NumberPhone;
        }
        public function getNumberphone()
        {
            return $this->NumberPhone;
        }

        public function toString()
        {
            //return json_encode($this);
            return "Id:". $this->Idperson.
            "Name:". $this->Nameperson.
            "Sex:". $this->Sex.
            "ngay sinh:". $this->Birthday.
            "Gmail:". $this->Gmail.
            "Sdt:". implode(" ",$this->NumberPhone);    
        }   

        public function getLengthNumberphone()
        {
            return count($this->NumberPhone);
        }

        public function getPerson(...$persons)
        {   
            $newPerson=null;
            foreach ($persons as $person) {
                if(empty($newPerson))
                {
                    $newPerson=$person;
                }
                else if ($newPerson->getLengthNumberphone()<$person->getLengthNumberphone()) {
                        $newPerson=$person;
                }
            } 
            return $newPerson;
        }
    }

    $person= new Person ("1","Min","08-10-1996","minhnguyen@gmail.com",["0905807870","0905807874"]);
    $secondPerson= new Person ("2","Nghia","08-10-1998","minhnguyen1@gmail.com",["0905807871"]);
    $threePerson= new Person ("3","Tuan","08-10-1997","minhnguyen2@gmail.com",["0905807872"]);
    echo $person->toString();
    echo "<br/>";
    echo $secondPerson->toString();
    echo "<br/>";
    echo $threePerson->toString();
    echo $person->getPerson($person,$secondPerson,$threePerson)->toString();
    */
?>
