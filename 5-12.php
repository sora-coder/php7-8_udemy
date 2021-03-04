<?php
trait Tax {
    //消費税を返す
    public function getTax(): int{
        return 10;
    }
}
trait ForeignTax {
    public function getTax(): int{
        return 20;
    }
}
class Item {
    use Tax, ForeignTax{
        Tax::getTax insteadOf ForeignTax;//Taxの方のgetTaxを呼び出す
        ForeignTax::getTax as getForeignTax;//ForeignTaxのgetTaxをgetForeignTaxという別名で呼び出すことができる
    }
    private int $price;
}
class Service {
    use Tax;
    private int $service_price;
}

$item = new Item;
echo $item->getTax(), "\n";
echo $item->getForeignTax(), "\n";

$service = new Service;
echo $service->getTax(), "\n";
