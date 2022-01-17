<?php

namespace App;

require_once \dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Console\DependencyInjection\AddConsoleCommandPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

$container = new ContainerBuilder();
$container->addCompilerPass(new AddConsoleCommandPass());

$loader = new PhpFileLoader($container, new FileLocator(__DIR__));
$loader->load(__DIR__.'/services.php');

$container->compile();

return $container;
