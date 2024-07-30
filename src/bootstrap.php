<?php
declare(strict_types=1);

namespace App;

use Dotenv\Dotenv;


$autoload = is_file(__DIR__ . '/../vendor/autoload.php')
    ? __DIR__ . '/../vendor/autoload.php'
    : __DIR__ . '/../../../autoload.php';
if (@!include $autoload) {
    echo 'Install packages using `composer update`';
    exit(1);
}
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();