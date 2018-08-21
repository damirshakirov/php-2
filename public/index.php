<?php
include '../classes/Product.class.php';
include '../classes/Computer.Product.class.php';

$product = new Product(1, 'Стул', 1000);
echo $product->add();
echo '<br>';
echo $product->view();
echo '<br>';

$computer = new Computer(2, 'MacBook', 2000, 'ноутбук', 'серебристый');
echo $computer->view();
