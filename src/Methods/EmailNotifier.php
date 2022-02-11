<?php

declare(strict_types=1);

namespace App\Methods;

class EmailNotifier implements NotifierInterface
{
    public function send(): void
    {
        echo "-Emailed-";
    }
}
