<?php
class Item{
    public string $name;
    public int $price;

    //コンストラクター
    public function __construct(string $name, int $price){//インスタンス作成時のパラメータから受け取る
        $this->name = $name;
        $this->price = $price;
    }

    //価格を取得する
    public function getPrice(string $end = ''){
        return number_format($this->price) . $end;
    }
}

//PHP入門
$php_basic = new Item('PHP入門', 2400);      //$nameと$priceにパラメータを入れる
echo $php_basic->name, '/', $php_basic->getPrice('円'), "\n";

//JS入門
$JS_basic = new Item('JS入門', 2300);
echo $JS_basic->name, '/', $php_basic->getPrice('円'), "\n";
