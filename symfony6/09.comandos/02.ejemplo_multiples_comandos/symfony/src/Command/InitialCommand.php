<?php
namespace App\Command;


use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputOption; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InitialCommand extends Command
{ 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:initial
       */
      // the name of the command (the part after "bin/console")
      ->setName('demo:initial') 
      // the short description shown while running "php bin/console list"
      ->setDescription('Demo that prints text on screen..')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This demo does not need entries.');   
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    // outputs multiple lines to the console (adding "\n" at the end of each line)
    $output->writeln([
      'User Creator',
      '============',
      '',
    ]);
    // outputs a message followed by a "\n"
    $output->writeln('Whoa!');
    // outputs a message without adding a "\n" at the end of the line
    $output->write('You are about to ');
    $output->write('create a user.');

    return Command::SUCCESS;
  }  
} 