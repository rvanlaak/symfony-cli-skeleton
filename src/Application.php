<?php

namespace App;

use Symfony\Component\Console\Application as BaseApplication;

final class Application extends BaseApplication
{
    public function __construct(\Traversable $commands)
    {
        $this->addCommands(iterator_to_array($commands));

        parent::__construct(__NAMESPACE__, '1.0.0');
    }
}
