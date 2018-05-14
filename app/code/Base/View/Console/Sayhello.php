<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 18:11
 */

namespace Base\View\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class Sayhello extends Command
{

    const NAME = 'name';

    protected function configure()
    {
        $options = [
            new InputOption(
                self::NAME,
                null,
                InputOption::VALUE_OPTIONAL,
                'Name'
            )
        ];

        $this->setName('example:sayhello');
        $this->setDescription('Demo command line');
        $this->setDefinition($options);

        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($name = $input->getOption(self::NAME)) {
            $output->writeln("Hit the sack, " . $name);
        } else {
            $output->writeln("Rikki-Tikki-Tavi, biatch!");
        }

        return $this;
    }
}