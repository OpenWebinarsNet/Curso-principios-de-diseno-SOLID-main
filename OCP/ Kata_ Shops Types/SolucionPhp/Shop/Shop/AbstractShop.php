<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop;

abstract class AbstractShop
{
    private string $name;
    private int $phone;

    public function __construct(string $name, int $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }
}
