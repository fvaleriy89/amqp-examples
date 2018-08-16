<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use App\RabbitmqConnection;

class PublishCommand extends Command
{

    protected function configure()
    {
        $this->setName('amqp:publish');
        $this->setDescription('Publish message to default queue');
        $this->setHelp('Publish message to default queue, defined in queue configs');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo "Just a test\n";
        new RabbitmqConnection;
    }
}
