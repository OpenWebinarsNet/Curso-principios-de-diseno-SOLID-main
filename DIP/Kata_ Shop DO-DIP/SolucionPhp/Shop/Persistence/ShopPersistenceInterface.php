<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Persistence;

use SolucionPhp\Shop\MiniShop;

interface ShopPersistenceInterface
{
    public function save(MiniShop $shop): void;
}
