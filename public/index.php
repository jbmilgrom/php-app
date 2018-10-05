<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use \DI\ContainerBuilder;
use \ExampleApp\HelloWorld;
use function \DI\create;


$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions([
    HelloWorld::class => create(HelloWorld::class)
]);

$container = $containerBuilder->build();

$HelloWorld = $container->get(HelloWorld::class);
$HelloWorld->announce();