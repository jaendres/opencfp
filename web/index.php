<?php
echo __DIR__.'/../vendor/autoload.php';exit;
require_once __DIR__.'/../vendor/autoload.php';

use OpenCFP\Application;
use OpenCFP\Environment;

$basePath = realpath(dirname(__DIR__));
$environment = Environment::fromEnvironmentVariable();

$app = new Application($basePath, $environment);

$app->run();
