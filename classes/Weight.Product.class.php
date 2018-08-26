<?php
class Weight extends Product
{
    private $weight;
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($weight)
    {
        $this->price = $weight * 23; // 1 кг = 23 рубля
    }
}
