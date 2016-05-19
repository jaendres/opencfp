<?php

require_once 'D:\home\site\wwwroot\web\vendor\autoload.php';

use OpenCFP\Application;
use OpenCFP\Environment;

$basePath = realpath(dirname(__DIR__));
$environment = Environment::fromEnvironmentVariable();

$app = new Application($basePath, $environment);

$app->run();
