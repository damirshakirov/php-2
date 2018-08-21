<?php
class Computer extends Product// Дочерний класс для Компьютеров

{
    public $type; // Компьютеры могут быть разных типов
    public $color; // Компьютеры могут быть разных цветов

    public function __construct($id, $title, $price, $type, $color) // Свойства Компьютеров

    {
        parent::__construct($id, $title, $price);
        $this->type  = $type;
        $this->color = $color;
    }
    public function view()
    {
        return "Компьютер имеет id $this->id, название $this->title, цена $this->price, тип $this->type и цвет $this->color";
    }
}
