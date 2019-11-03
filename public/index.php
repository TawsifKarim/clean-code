<?php

require __DIR__. '/../vendor/autoload.php';

use \App\Controllers\WebHookController;
use App\Controllers\PaymentController;

$request = (object) [
    'type' => 'card_AccEpted',
    'user_id' => 1
];

$web_c = new WebHookController();
//$web_c->handle($request);

$pc = new PaymentController();
$pc->store();