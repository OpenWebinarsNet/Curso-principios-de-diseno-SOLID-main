<?php

declare(strict_types=1);

namespace SolucionPhp\Shop;

use SolucionPhp\Shop\Notifier\ShopSmsNotifier;
use SolucionPhp\Shop\Persistence\ShopSQLPersistence;

class Application
{
    private MiniShop $shop;
    private ShopSmsNotifier $notifier;
    private ShopSQLPersistence $repo;

    public function __construct(MiniShop $shop, ShopSmsNotifier $notifier, ShopSQLPersistence $repo)
    {
        $this->shop = $shop;
        $this->notifier = $notifier;
        $this->repo = $repo;
    }

    public function run(): void
    {
        $this->repo->save($this->shop);
        $this->notifier->send($this->shop);
    }
}
