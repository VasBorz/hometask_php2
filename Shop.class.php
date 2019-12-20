<?php
//1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.

class Shop{
    //2. Описать свойства класса из п.1 (состояние).
    private $product;
    private $rating;
    private $order;
    private $result;

    //3. Описать поведение класса из п.1 (методы).
    public function getOrder(){
        return $this->order;
    }

    public function getProduct(){
        return $this->product;
    }

    public function getRating(){
        return $this->rating;
    }

    public function getResult(){
        return $this->result;
    }

    function __construct($product,$rating,$order){
        $this->result = [ 'Характеристика продукта:' => $product,
            'Рейтинг продукта:' => $rating,
            'Количество заказов данного продукта:' => $order ];
        return $this->getResult();
    }

}