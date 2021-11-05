<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop;

use SolucionPhp\Shop\Shop\Type\ShopTypeInterface;

class StandardShop extends AbstractShop
{
    private ShopTypeInterface $type;

    public function __construct(string $name, int $phone, ShopTypeInterface $type)
    {
        parent::__construct($name, $phone);

        $this->type = $type;
    }

    public function getShopType(): ShopTypeInterface
    {
        return $this->type;
    }
}
