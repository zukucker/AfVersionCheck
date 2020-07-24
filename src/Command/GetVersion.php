<?php

declare(strict_types=1);

namespace AfVersionCheck\Command;

use PackageVersions\Versions;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetVersion extends Command
{
    protected static $defaultName = 'get:version';

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $shopwareVersion = Versions::getVersion('shopware/core');
        $output->writeln("Shopware Version: " . $shopwareVersion);
        return 0;
    }
}

