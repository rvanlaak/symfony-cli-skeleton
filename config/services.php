<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\tagged_iterator;

return static function (ContainerConfigurator $configurator) {
    $services = $configurator->services();
    $services
        ->defaults()
            ->autoconfigure()
            ->autowire()
    ;

    $services->instanceof(Command::class)->tag('console.command');

    $services->load(__NAMESPACE__.'\\', '../src/*');
    $services->get(Application::class)
        ->args([tagged_iterator('console.command')])
        ->public();
};
