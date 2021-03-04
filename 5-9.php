<?php
interface ItemInterface{//interfaceで宣言したfunctionは実装するクラスで必ず宣言しないといけない
    public function getPrice(): int;// {} は使えない
}
class Book implements ItemInterface{//ItemInterfaceを実装したBookクラス
    private int $price;
    public function getPrice(): int{
        return $this->price;
    }
}
class Pencil implements ItemInterface{//ItemInterfaceを実装したPencilクラス
    private int $price;
    public function getPrice(): int{
        return $this->price;//処理の内容は変えてもいい
    }
}
