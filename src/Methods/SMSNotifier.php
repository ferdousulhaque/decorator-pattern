<?php

declare(strict_types=1);

namespace App\Methods;

use App\Decorator;

class SMSNotifier extends Decorator
{
    public function send(): void
    {
        $this->notifier->send();
        echo "-SMSed-";
    }
}
