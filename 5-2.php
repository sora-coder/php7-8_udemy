<?php
class Item{//クラス定義(慣例的に最初の文字は大文字)
    public string $name;//商品名
    public int $price;//価格
}

//PHP入門
$php_basic = new Item();         //$php_basicというインスタンスを作成
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/', $php_basic->price;

//JS入門
$JS_basic = new Item();
$JS_basic->name = 'JS入門';
$JS_basic->price = 2300;

echo $JS_basic->name, '/', $JS_basic->price;
