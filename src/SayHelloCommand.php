<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    public function configure()
    {
        $this->setName('Greet')
            ->setDescription('Offer a greeting to the given person.')
            ->addArgument('name', InputArgument::REQUIRED, 'Your name');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln("<comment>Hello, $name! </comment>");
    }
}
