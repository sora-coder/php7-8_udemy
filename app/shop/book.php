<?php
namespace app\shop;      //namespaceを書くことでBookクラスが他のファイルでも使用できる
class Book {
    private int $price;

    public function getPrice(): int{
        return 100;
    }
}
