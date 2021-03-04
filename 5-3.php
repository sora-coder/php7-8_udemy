<?php
class Item{
    public string $name;
    public int $price;
    //価格を取得する
    public function getPrice(string $end = ''){
        return number_format($this->price) . $end;
    }
}

//PHP入門
$php_basic = new Item();
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/', $php_basic->getPrice('円'), "\n";

//JS入門
$JS_basic = new Item();
$JS_basic->name = 'JS入門';
$JS_basic->price = 2300;

echo $JS_basic->name, '/', $JS_basic->price;
