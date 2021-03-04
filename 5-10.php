<?php
abstract class Item {
    private $price;
    public function getPrice(){
        return $this->price;
    }
    //抽象メソッド
    abstract public function getUnit();
}

class Book extends Item {
    public function getUnit(){
        return '冊';
    }
}
class Pen extends Item {
    public function getUnit(){
        return '本';
    }
}

$book = new Book();
$book->getPrice();
