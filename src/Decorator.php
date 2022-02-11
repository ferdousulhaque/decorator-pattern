<?php

declare(strict_types=1);

namespace App;

use App\Methods\NotifierInterface;

abstract class Decorator implements NotifierInterface
{

    protected $notifier;

    /**
     *
     * @param NotifierInterface $notifier
     */
    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * 
     */
    abstract function send(): void;
}
