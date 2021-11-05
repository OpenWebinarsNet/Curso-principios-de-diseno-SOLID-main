<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Persistence;

use SolucionPhp\Shop\MiniShop;

interface ShopRedisPersistenceInterface
{
    public function save(MiniShop $shop, string $hash): void;
}
