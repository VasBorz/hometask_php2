<?php
    include('Shop.class.php');
    //4. Придумать наследников класса из п.1. Чем они будут отличаться?

    class PopularProducts extends Shop{
        private $popular_products;

         public function getPopularProducts()
        {
            return $this->popular_products;
        }

        public function __construct($product, $rating, $order, $popular_products)
        {
            $this->popular_products['Количество популярних продуктов'] = $popular_products;
            parent::__construct($product, $rating, $order);
        }


    }