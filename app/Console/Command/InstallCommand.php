<?php
namespace App\Console\Command;

use Origin\Security\Security;
use Origin\Console\Command\Command;

/**
 * This command be used even when deploying to other servers.
 * You can also customise as you set fit.
 */
class InstallCommand extends Command
{
    protected $name = 'install';
    protected $description = 'Post install command';
 
    protected function execute() : void
    {
        $source = ROOT . '/config/.env.default';
        $destination = ROOT.  '/config/.env';

        if (file_exists($destination)) {
            $this->io->status('error', 'config/.env already exists');
            $this->abort();
        }

        $template = str_replace('{key}', Security::generateKey(), file_get_contents($source));
        file_put_contents($destination, $template);
        $this->io->status('ok', 'config/.env created');
    }
}
