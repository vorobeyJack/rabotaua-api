<?php

require '../vendor/autoload.php';
//
use vrba\rabotaApi\Service;

$api = Service::run();

dump($api->dictionary->getsEducation());die;

