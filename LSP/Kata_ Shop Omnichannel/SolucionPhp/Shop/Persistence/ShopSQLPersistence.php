<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Persistence;

use SolucionPhp\Shop\MiniShop;

class ShopSQLPersistence
{
    private MiniShop $shop;
    //private SQLPersistence $persistence;

    public function __construct(MiniShop $shop)
    {
        $this->shop = $shop;
        //$this->persistence = new SQLPersistence();
    }

    public function save(): void
    {
        //$stmt = $this->persistence->prepare("INSERT INTO shops VALUES (:name, :phone)");
        /*$stmt->execute([
            'name' => $this->shop->getName(),
            'phone' => $this->shop->getPhone()
        ]);*/
    }
}
