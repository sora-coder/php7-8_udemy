<?php
class Item {
    public static int $tax = 10;//staticを記述

    public static function getTax(): int{//staticを記述
        return self::$tax;     //staticのプロパティを呼び出す時は$thisではなくself::を使う
    }
}
echo Item::getTax();           //インスタンスを作らなくてもメソッドを呼び出せる

echo Item::$tax, "\n";     //publicなら呼び出せる
Item::$tax = 8;      //プロパティの変更ができる(クラスのプロパティ自体が変更になる)

$item02 = new Item();
echo $item02->getTax();    // 変更後の8が表示される
