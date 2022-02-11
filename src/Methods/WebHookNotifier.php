<?php

declare(strict_types=1);

namespace App\Methods;

use App\Decorator;

class WebHookNotifier extends Decorator
{
    public function send(): void
    {
        $this->notifier->send();
        echo "-WebhookCalled-";
    }
}
