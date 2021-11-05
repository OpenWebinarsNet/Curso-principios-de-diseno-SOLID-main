<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop\Type;

interface ToyShopInterface extends ShopTypeInterface
{
    public function playPlaceAvailable(): bool;
}
