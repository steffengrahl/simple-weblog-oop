<?php

use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/../.env');

if ($_ENV['APP_ENV'] === 'prod') {
    error_reporting(0);
    ini_set('display_errors', '0');
}

if ($_ENV['APP_ENV'] === 'dev') {
    error_reporting(E_ALL | E_NOTICE | E_STRICT);
    ini_set('display_errors', '1');
}
