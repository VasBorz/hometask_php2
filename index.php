<?php
    //подключаємо подкласс
    include ('PopularProducts.class.php');
    //создаем клас
    $obj = new PopularProducts('test','5','12', '10');
    // вивод информации
    echo "<pre>";
    print_r( $obj->getResult()+$obj->getPopularProducts());
    echo "</pre>";

     // 5. Дан код:
//    class A {
//        public function foo() {
//            static $x = 0;
//            echo ++$x;
//        }
//    }
//    $a1 = new A();
//    $a2 = new A();
//    $a1->foo();
//    $a2->foo();
//    $a1->foo();
//    $a2->foo();
    //Что он выведет на каждом шаге? Почему?
    // Переменная $x определена как статическая поетому она привязана на прямую к класу а не к обекту.

    //    Немного изменим п.5:
//    class A {
//        public function foo() {
//            static $x = 0;
//            echo ++$x;
//        }
//    }
//    class B extends A {
//    }
//    $a1 = new A();
//    $b1 = new B();
//    $a1->foo();
//    $b1->foo();
//    $a1->foo();
//    $b1->foo();
    //6. Объясните результаты в этом случае.
    //Сама суть та же самая ми привязаля ее к класу. Cоздали другой подклас и она привязалась к другому. Извените нету русской розкладки.
    //7. *Дан код:
    class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    class B extends A {
    }
    $a1 = new A;
    $b1 = new B;
    $a1->foo();//1
    $b1->foo();//1
    $a1->foo();//2
    $b1->foo();//2
    //Что он выведет на каждом шаге? Почему?
    //1122 Переменная сохраняет свое значение в каждом из класов она привязана к класу