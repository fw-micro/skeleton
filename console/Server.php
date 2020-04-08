<?php


namespace src\console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TitasGailius\Terminal\Terminal;

class Server extends Command
{
    protected static $defaultName = 'server:up';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $response = Terminal::builder()
            ->in(__DIR__ . '/../public/')
            ->command('PHP -S 127.0.0.1:8080')
            ->inBackground()
            ->run()
            ->process();

        while ($response->isRunning()) {
            sleep(1);
        }

        return 0;
    }
}