<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop\Type;

interface FoodShopInterface extends ShopTypeInterface
{
    public function sellPreCook(): bool;
}
