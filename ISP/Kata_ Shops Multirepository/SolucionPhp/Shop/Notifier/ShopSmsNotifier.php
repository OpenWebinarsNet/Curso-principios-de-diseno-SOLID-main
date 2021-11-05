<?php

declare(strict_types=1);

namespace SolucionPhp\Shop\Notifier;

use SolucionPhp\Shop\MiniShop;

class ShopSmsNotifier implements NotifierInterface
{
    //private SmsNotifier $notifier;

    public function __construct()
    {
        //$this->notifier = new Notifier();
    }

    public function send(MiniShop $shop): void
    {
        //$text = sprintf("Your shop %s has been created", $shop->getName());

        try {
            //$this->notifier->send($text, $shop->getPhone());
        } catch (\Exception $e) {
            // Log this error
        }
    }
}
