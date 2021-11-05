<?php

declare(strict_types=1);

namespace SolucionPhp;

use SolucionPhp\Shop\Application;
use SolucionPhp\Shop\MiniShop;
use SolucionPhp\Shop\Notifier\ShopEmailNotifier;
use SolucionPhp\Shop\Persistence\ShopRedisPersistence;
use SolucionPhp\Shop\Persistence\ShopSQLPersistence;
use SolucionPhp\Shop\Shop\StandardShop;
use SolucionPhp\Shop\Shop\Type\NullShopType;
use SolucionPhp\Shop\Shop\Type\SuperMarket;
use SolucionPhp\Shop\Shop\Type\ToyStore;

$shop = $_POST['shop'];
$shop_type = $_POST['type'];
$name = $_POST['name'];
$phone = $_POST['phone'];

switch ($shop_type) {
    case 'supermarket':
        $type = new SuperMarket();
        break;
    case 'toystore':
        $type = new ToyStore();
        break;
    default:
        $type = new NullShopType();
        break;
}


$shop_instance = ($shop == 'mini') ? new MiniShop($name, $phone) : new StandardShop($name, $phone, $type);

(new Application(
    $shop_instance,
    new ShopEmailNotifier(),
    new ShopSQLPersistence(),
    new ShopRedisPersistence()
))->run();