<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{
    /**
     * Configures the command options.
     *
     * @return void
     */
    public function configure()
    {
        $this
            ->setName('CreateLaravelApp')
            ->setDescription('Creates a new Laravel installation with the given name.')
            ->addArgument('name', InputArgument::REQUIRED, 'Application name.');
    }

    /**
     * Execute the command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $dir = getcwd();
        $this->writeln("Command executed at: '$dir'");
    }
}
