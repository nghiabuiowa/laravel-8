<?php
    class Food
    {
        private $NameFood;
        private $Price;
        private $Sale;
        private $Amount;
        private $SaleALl;

        public function __construct ($NameFood, $Price=0, $Sale=0, $Amount=0, $SaleALl=0)
        {
            $this->NameFood=$NameFood;
            $this->Price=$Price;
            $this->Sale=$Sale;
            $this->Amount=$Amount;
            $this->SaleALl=$SaleALl;
        }

        public function setNameFood($NameFood)
        {
            $this->NameFood=$NameFood;
        }
        public function getNameFood()
        {
            return $this->NameFood;
        }

        public function setPrice($Price)
        {
            $this->Price=$Price;
        }
        public function getPrice():int
        {
            return $this->Price;
        }

        public function setSale($Sale)
        {
            $this->Sale=$Sale;
        }
        public function getSale():int
        {
            return $this->Sale;
        }

        public function setAmount($Amount)
        {
            $this->Amount=$Amount;
        }
        public function getAmount():int
        {
            return $this->Amount;
        }

        public function setSaleAll($SaleALl)
        {
            $this->SaleALl=$SaleALl;
        }
        public function getSaleAll():int
        {
            return $this->SaleALl;
        }

        public function toString()
        {
            return "NameFood:". $this->NameFood.
            "Price:". $this->Price.
            "Sale:". $this->Sale.
            "Amount:". $this->Amount.
            "SaleAll:". $this->SaleALl;
        }

        public function getsales(...$Sales)
        {   
            foreach ($Sales as $Sale) {
                $Charge=$Sale->getPrice()*$Sale->getAmount()*(100-$Sale->getSale())/100;
                echo'So tien phai tra '.$Sale->getNameFood().'  '.$Charge;
            }      
            return $Charge;
        }

        public function notSale(...$Notsale)
        {
            foreach ($Notsale as $Sale)
                echo ' So tien chenh lech là:  '.$Sale->getPrice()*$Sale->getAmount()-($Sale->getsales($Sale))."<br />";
        }

        public function getsalealls(...$Sales)
        {
            foreach ($Sales as $Sale)
            {
                //if($Sale->getSale()>=$Sale->getSaleAll())
                    //$Charge=$Sale->getsales($Sale);
                if ($Sale->getSale()<=$Sale->getSaleAll()) {
                    $Charge=$Sale->getPrice()*$Sale->getAmount()*(100-$Sale->getSaleAll())/100;
                    echo'So tien phai tra '.$Sale->getNameFood().'  '.$Charge;;
                }
                else
                    $Charge=$Sale->getsales($Sale);
            }
            return $Charge;
        }

        public function notSales(...$Notsale)
        {
            foreach ($Notsale as $Sale)
                echo ' So tien chenh lech là:  '.$Sale->getPrice()*$Sale->getAmount()-($Sale->getsalealls($Sale))."<br />";
        }

    }
    $foodFirst= new Food ("Fish",100,10,1,0);
    $foodSecond= new Food ("Rice",200,20,2,0);
    $foodThree= new Food ("Sup",300,30,3,0);
    $foodFour= new Food ("Beef",400,40,4,0);
    $foodFive= new Food ("Chicken Rice",500,50,5,0);
    echo $foodFirst->toString();
    echo "<br/>";
    echo $foodSecond->toString();
    echo "<br/>";
    echo $foodThree->toString();
    echo "<br/>";
    echo $foodFour->toString();
    echo "<br/>";
    echo $foodFive->toString();
    echo "<br/>";
    //$foodFirst->getsales($foodFirst,$foodSecond,$foodThree,$foodFour,$foodFive);
    $foodFirst->notsale($foodFirst,$foodSecond,$foodThree,$foodFour,$foodFive);

    $foodFirsts= new Food ("Fish",100,10,1,40);
    $foodSeconds= new Food ("Rice",200,20,2,40);
    $foodThrees= new Food ("Sup",300,30,3,40);
    $foodFours= new Food ("Beef",400,40,4,40);
    $foodFives= new Food ("Chicken Rice",500,50,5,40);

    echo "<br/>";
    echo $foodFirsts->toString();
    echo "<br/>";
    echo $foodSeconds->toString();
    echo "<br/>";
    echo $foodThrees->toString();
    echo "<br/>";
    echo $foodFours->toString();
    echo "<br/>";
    echo $foodFives->toString();
    echo "<br/>";
    //$foodFirsts->getsalealls($foodFirsts,$foodSeconds,$foodThrees,$foodFours,$foodFives);
    $foodFirsts->notSales($foodFirsts,$foodSeconds,$foodThrees,$foodFours,$foodFives);
?>




