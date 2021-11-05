<?php

declare(strict_types=1);

namespace SolucionPhp\Shop;

use SolucionPhp\Shop\Shop\AbstractShop;
use SolucionPhp\Shop\Notifier\NotifierInterface;
use SolucionPhp\Shop\Persistence\ShopRedisPersistenceInterface;
use SolucionPhp\Shop\Persistence\ShopSQLPersistenceInterface;

class Application
{
    private AbstractShop $shop;
    private NotifierInterface $notifier;
    private ShopSQLPersistenceInterface $repo;
    private ShopRedisPersistenceInterface $memory_repo;

    public function __construct(AbstractShop $shop, NotifierInterface $notifier, ShopSQLPersistenceInterface $repo, ShopRedisPersistenceInterface $memory_repo)
    {
        $this->shop = $shop;
        $this->notifier = $notifier;
        $this->repo = $repo;
        $this->memory_repo = $memory_repo;
    }

    public function run(): void
    {
        $this->repo->save($this->shop);
        $this->memory_repo->save($this->shop, 'shop_hash_blueprint');
        $this->notifier->send($this->shop);
    }
}
