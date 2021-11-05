<?php

declare(strict_types=1);

namespace SolucionPhp;

use SolucionPhp\Shop\Application;
use SolucionPhp\Shop\MiniShop;
use SolucionPhp\Shop\Notifier\ShopEmailNotifier;
use SolucionPhp\Shop\Persistence\ShopRedisPersistence;
use SolucionPhp\Shop\Persistence\ShopSQLPersistence;

(new Application(
    new MiniShop('sample_name', 600100001),
    new ShopEmailNotifier(),
    new ShopSQLPersistence(),
    new ShopRedisPersistence()
))->run();