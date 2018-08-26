<?php
include '../classes/Product.class.php';
include '../classes/Units.Product.class.php';
include '../classes/Electronic.Product.class.php';
include '../classes/Weight.Product.class.php';

// function __autoload($class_name)
// {
//     $filename = '../classes/' . $class_name . 'Product.class.php';
//     include $filename;
// }

$nuts = new Units();
$nuts->setPrice(100); // цена штучного товара 100 рублей
echo 'Цена штучного товара: ' . $nuts->getPrice();
echo '<br>';

$file = new Electronic();
$file->setPrice($nuts->getPrice());
echo 'Цена электронного товара: ' . $file->getPrice();
echo '<br>';

$banan = new Weight();
$banan->setPrice(2); // продается 2 кг
echo 'Цена весового товара: ' . $banan->getPrice();
