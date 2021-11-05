<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Notifier;

use SolucionPhp\Shop\MiniShop;

interface NotifierInterface
{
    public function send(MiniShop $shop);
}
