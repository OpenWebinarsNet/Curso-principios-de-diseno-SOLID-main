<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop\Type;

class SuperMarket implements FoodShopInterface
{
    private const HUMAN_TYPE = 'SuperMarket';
    private const SELL_PRECOOK = false;

    public function getType(): string
    {
        return self::HUMAN_TYPE;
    }

    public function sellPreCook(): bool
    {
        return self::SELL_PRECOOK;
    }

}
