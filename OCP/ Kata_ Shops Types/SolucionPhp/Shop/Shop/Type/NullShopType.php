<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop\Type;

class NullShopType implements ShopTypeInterface
{
    private const HUMAN_TYPE = 'Generic shop';

    public function getType(): string {
        return self::HUMAN_TYPE;
    }
}
