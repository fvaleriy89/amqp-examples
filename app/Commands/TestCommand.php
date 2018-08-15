<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{

    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('app:test')

        // the short description shown while running "php bin/console list"
        ->setDescription('Test!')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command is just a test...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "Just a test\n";
    }
}
