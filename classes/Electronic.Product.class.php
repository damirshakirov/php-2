<?php
class Electronic extends Product
{
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price / 2;
    }
}
