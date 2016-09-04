
<?php

session_cache_limiter(false);
session_start();

use Slim\Slim;

define('INC_ROOT', dirname(__DIR__));

#echo INC_ROOT;
require_once INC_ROOT.'/vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
