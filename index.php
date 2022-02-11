<?php

include_once "./vendor/autoload.php";

use App\Methods\EmailNotifier;
use App\Methods\SMSNotifier;
use App\Methods\WebHookNotifier;

function clientCode()
{
    $a = new EmailNotifier();
    $b = new SMSNotifier($a);
    $c = new WebHookNotifier($b);
    $c->send();
}

clientCode();
