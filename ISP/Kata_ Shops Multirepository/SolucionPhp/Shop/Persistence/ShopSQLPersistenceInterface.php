<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Persistence;

use SolucionPhp\Shop\MiniShop;

interface ShopSQLPersistenceInterface
{
    public function save(MiniShop $shop): void;
}
