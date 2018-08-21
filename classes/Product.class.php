<?php
class Product
{
    public $id;
    public $title;
    public $price;
    public function __construct($id, $title, $price) // Базовые свойства всех товаров

    {
        $this->id    = $id;
        $this->title = $title;
        $this->price = $price;
    }
    public function add()
    {
        // Базовый метод добавления товара в БД
        return "Товар $this->title с id $this->id добавлен в базу данных с ценой $this->price";
    }
    public function view()
    {
        // Базовый метод просмотра цены и названия товара
        return "Товар $this->id называется $this->title и стоит $this->price";
    }
}

