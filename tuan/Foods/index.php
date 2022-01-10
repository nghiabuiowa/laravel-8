<?php
class Foods
{
    private $nameFood;
    private $price;
    private $sale;
    private $amount;
    private $saleAll;

    public function __construct($nameFood, $price = 0, $sale = 0, $amount = 0, $saleAll = 0)
    {
        $this->nameFood = $nameFood;
        $this->price = $price;
        $this->sale = $sale;
        $this->amount = $amount;
        $this->saleAll = $saleAll;
    }
    public function setNameFood($nameFood)
    {
        $this->nameFood = $nameFood;
    }
    public function getNameFood()
    {
        return $this->nameFood;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setSale($sale)
    {
        $this->sale = $sale;
    }
    public function getSale()
    {
        return $this->sale;
    }
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function setSaleAll($saleAll)
    {
        $this->saleAll = $saleAll;
    }
    public function getSaleAll()
    {
        return $this->saleAll;
    }
    public function toString()
    {
        return "Name Food: " . $this->nameFood . " Price: " . $this->price . " Sale: " . $this->sale
            . " Amount: " . $this->amount . " SaleAll: " . $this->saleAll;
    }
    public function getPay(): int
    {
        return $this->amount * $this->price;
    }
    public function getTotal(...$Foods)
    {
        $sum = 0;
        foreach ($Foods as $foods) {
            $sum = $sum + $foods->getPay();
        }
        return $sum;
    }
    public function getPaySell()
    {
        return $this->amount * $this->sale;
    }
    public function getTotalSell(...$Foods)
    {
        $sum = 0;
        foreach ($Foods as $foods) {
            $sum = $sum + $foods->getPaySell();
        }
        return $sum;
    }
    public function getPaySellAll()
    {
        return $this->amount * (1-$this->saleAll) * $this->price;
    }
    public function getTotalSellAll(...$Foods)
    {
        $sum = 0;
        foreach ($Foods as $food) {
            $sum = $sum + $food->getPaySellAll();
        }
        return $sum;
    }
    public function print(...$ins)
    {
        foreach ($ins as $in) {
            echo $in;
        }
    }
}
$fish = new Foods("Fish", 100, 10, 1, 0.4);
$rice = new Foods("Rice", 200, 20, 2, 0.4);
$sup = new Foods("Sup", 300, 30, 3, 0.4);
$beef = new Foods("Beef", 400, 40, 4, 0.4);
$chickenRice = new Foods("Chicken Rice", 500, 50, 5, 0.5);
$newPay = $fish->getTotal($fish, $rice, $sup, $beef, $chickenRice);
$newPay2 = $fish->getTotalSell($fish, $rice, $sup, $beef, $chickenRice);
$Total = $newPay - $newPay2;
$newPay3 = $fish->getTotalSellAll($fish, $rice, $sup, $beef, $chickenRice);
echo ("So Tien Phai Tra Khi Chua Sale: ") . $newPay;
echo (" So Tien Phai Tra Khi Sale: ") . $Total;
echo (" So Tien Phai Tra Khi Sale All la: ") . $newPay3;
