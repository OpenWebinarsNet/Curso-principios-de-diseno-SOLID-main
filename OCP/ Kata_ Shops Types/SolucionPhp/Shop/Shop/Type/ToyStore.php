<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Shop\Type;

class ToyStore implements ToyShopInterface
{
    private const HUMAN_TYPE = 'ToyStore';
    private const PLAYPLACE_AVAILABLE = true;

    public function getType(): string {
        return self::HUMAN_TYPE;
    }

    public function playPlaceAvailable(): bool
    {
        return self::PLAYPLACE_AVAILABLE;
    }

}
