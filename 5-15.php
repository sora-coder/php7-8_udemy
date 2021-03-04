<?php
class Item {
    public int $tax = 10;//消費税

    public function getTax(): int{
        return $this->tax;
    }
}

$item = new Item();
echo $item->getTax();
