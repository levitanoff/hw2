<?php

include "./vendor/autoload.php";

use Levitanoff\Hw4\SiteChecker;

$client = new SiteChecker();
$client->getRequest('https://ya.ru');
echo $client->getCode();
echo PHP_EOL;

echo "Ok";