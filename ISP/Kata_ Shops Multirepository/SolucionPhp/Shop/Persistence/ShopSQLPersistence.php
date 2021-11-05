<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Persistence;

use SolucionPhp\Shop\MiniShop;

class ShopSQLPersistence implements ShopSQLPersistenceInterface
{
    //private SQLPersistence $persistence;

    public function __construct()
    {
        //$this->persistence = new SQLPersistence();
    }

    public function save(MiniShop $shop): void
    {
        //$stmt = $this->persistence->prepare("INSERT INTO shops VALUES (:name, :phone)");
        /*$stmt->execute([
            'name' => $shop->getName(),
            'phone' => $shop->getPhone()
        ]);*/
    }
}
