<?php

require '../vendor/autoload.php';

use vrba\rabotaApi\Service;

$api = Service::run();

try {
    dump($api->account->getPhoto());
} catch (\Throwable $e) {
    dump(new \vrba\rabotaApi\Http\Response\ErrorResponse($e));
    die;
}
