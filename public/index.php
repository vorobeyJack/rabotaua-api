<?php

require '../vendor/autoload.php';

use vrba\rabotaApi\Service;

$api = Service::run();

try {
    dump($api->resume->getCurrent(720));
} catch (\Throwable $e) {
    dump(new \vrba\rabotaApi\Http\Response\ErrorResponse($e));
    die;
}
