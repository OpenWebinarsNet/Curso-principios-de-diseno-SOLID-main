<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Persistence;

use SolucionPhp\Shop\MiniShop;

class ShopRedisPersistence implements ShopRedisPersistenceInterface
{
    //private RedisPersistence $persistence;

    public function __construct()
    {
        //$this->persistence = new RedisPersistence();
    }

    public function save(MiniShop $shop, string $hash): void
    {
        //$this->persistence->save(json_encode($shop), $hash);
    }
}
