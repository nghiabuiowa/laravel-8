<?php
class Person
{
    private $idPerson;
    private $namePerson;
    private $birthday;
    private $sex;
    private $gmail;
    private $numberPhone;
    public function __construct($idPerson, $namePerson, $birthday, $gmail, $numberPhone, $sex = "Male")
    {
        $this->idPerson = $idPerson;
        $this->namePerson = $namePerson;
        $this->birthday = $birthday;
        $this->sex = $sex;
        $this->gmail = $gmail;
        $this->numberPhone = $numberPhone;
    }
    public function setIdPerson($idPerson)
    {
        $this->idPerson = $idPerson;
    }
    public function getIdPerson($idPerson)
    {
        return $this->idPerson;
    }
    public function setNamePerson($namePerson)
    {
        $this->namePerson = $namePerson;
    }
    public function getNamePerson($namePerson)
    {
        return $this->namePerson;
    }
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    public function getBirthday($birthday)
    {
        return $this->birthday;
    }
    public function setSex($sex)
    {
        $this->sex = $sex;
    }
    public function getSex($sex)
    {
        return $this->sex;
    }
    public function setGmail($gmail)
    {
        $this->gmail = $gmail;
    }
    public function getGmail($gmail)
    {
        return $this->gmail;
    }
    public function setNumberPhone($numberPhone)
    {
        $this->numberPhone = $numberPhone;
    }
    public function getNumberPhone()
    {
        return $this->numberPhone;
    }

    public function toString()
    {
        return " Id: " . $this->idPerson . " Name: " . $this->namePerson .
            " Birthday: " . $this->birthday . " Gmail: " . $this->gmail .
            " Sdt: " . implode($this->numberPhone) . " Sex: " . $this->sex;
    }
    public function getLenghtNumber(): int
    {
        return count($this->numberPhone);
    }
    public function getPerson(...$persons)
    {
        $newPerson = null;
        foreach ($persons as  $person) {
            if (empty($newPerson)) {
                $newPerson = $person;
            } else if ($person->getLenghtNumber() >= $newPerson->getLenghtNumber()) {
                $newPerson = $person;
            }
        }
        return $newPerson;
    }
}

$personOne = new Person(1, "Tuan", "1996/9/1", "dinhvuanhtuan1@gmail.com", ["03344074585", " 445844646", " 82585"]);
$personTwo = new Person(2, "Minh", '1996/9/1', "dinhvuanhtuan1@gmail.com", ["033404586"]);
$personThree = new Person(3, "Nghia", '1996/9/1', "dinhvuanhtuan1@gmail.com", ["033474587"]);
$newPerson= $personOne->getPerson($personOne, $personTwo, $personThree)->toString();
echo $newPerson;
//echo $person->getPerson($personOne,$personTwo,$personThree)->toString();
//$tuan =count($personOne->getNumberPhone($numberPhone))
//var_dump ($personOne.maxNumber($numberPhone));
//var_dump(maxNumber($personOne[4]);
