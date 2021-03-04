<?php
class Item {
    private string $name;
    private int $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
    public function __tostring(){//オブジェクトを echo 等で画面出力した際に自動的に呼び出される
        return $this->name . '/' . number_format($this->price) . '円';
    }
}
$item = new Item('PHP入門', 1500);
echo $item;
