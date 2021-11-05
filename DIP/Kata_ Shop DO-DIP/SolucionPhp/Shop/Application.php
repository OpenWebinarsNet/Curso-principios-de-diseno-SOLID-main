<?php

declare(strict_types=1);

namespace SolucionPhp\Shop;

use SolucionPhp\Shop\Notifier\NotifierInterface;
use SolucionPhp\Shop\Persistence\ShopPersistenceInterface;

class Application
{
    private MiniShop $shop;
    private NotifierInterface $notifier;
    private ShopPersistenceInterface $repo;

    public function __construct(MiniShop $shop, NotifierInterface $notifier, ShopPersistenceInterface $repo)
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
