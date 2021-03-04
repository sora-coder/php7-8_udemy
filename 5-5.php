<?php
class Item{
    public string $name;
    private int $price;
    public function __construct(string $name, int $price = 0){
        $this->name = $name;
        $this->price = $price;
    }
    //価格を設定する
    public function setPrice(int $price){
        if($price < 0){
            return false;
        }
        $this->price = $price;
        return true;
    }
    //価格を取得する
    public function getPrice(string $end = ''){
        return number_format($this->price) . $end;
    }
}
//PHP入門
$php_basic = new Item('PHP入門', 1500);
$php_basic->setPrice(-1000);
echo $php_basic->name, '/', $php_basic->getPrice('円'), "\n";
//JS入門
$JS_basic = new Item('JS入門');
$JS_basic->setPrice(2300);
echo $JS_basic->name, '/', $JS_basic->getPrice('円'), "\n";
