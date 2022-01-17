<?php

namespace App\UserInterface\Cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ExampleCommand extends Command
{
    public function __construct()
    {
        parent::__construct('app:example');
    }

    protected function configure()
    {
        $this->addArgument('name', InputArgument::REQUIRED, 'Name of the one running the example command.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        $output->writeln("<info>Hello worl, my name is $name.</info>");

        return self::SUCCESS;
    }
}
