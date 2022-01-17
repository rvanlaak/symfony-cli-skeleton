Symfony CLI Minimum Skeleton
============================

Thi CLI project skeleton tempts to require the least amount of code needed to write a command line interface project
based on Symfony Console.

The folder structure follow a simple Domain Driven Design application structure by suggesting splitting Application,
Domain, UserInterface, and Infrastructure responsibilities.

The minimum of features that is needed for developing CLI applications is included:

* [Auto-wiring](https://symfony.com/doc/current/service_container/autowiring.html) on all classes in `/src`
* Autoconfigure `Command` implementations directly to the CLI console application
* [PHPUnit](https://phpunit.de/)

## How to run tests?

Running PHPUnit test suites is possible by running `composer run tests`. The `/tests` folder gets auto-registered by
composer, and follows the DDD application structure, but no actual tests are provided with the skeleton.

## How to register a command to the CLI console?

Registering a command to the CLI application is the only autoconfiguration available in this skeleton, as can be found
in `config/services.php`.

* Create a class (preferably in `/src/UserInterface/Cli`) and let it extend `Symfony\Component\Console\Command\Command`
* Run `bin/console`, the command created became available

## Environment requirements

* PHP `>=8.0.2` with `ext-mbstring` extension enabled
* [Composer](https://getcomposer.org/)
