<?php
abstract class Product
{
    private $price; // Цена товара
    abstract protected function getPrice(); // Получаем цену товара
    abstract protected function setPrice($price); // Устанавливаем цену товара
}



