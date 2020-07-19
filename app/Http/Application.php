<?php
/**
 * Application
 * Configure any middleware here
 */
namespace App\Http;

use Origin\Http\BaseApplication;

use Origin\Http\Middleware\CsrfProtectionMiddleware;
use Origin\Http\Middleware\MaintenanceModeMiddleware;

class Application extends BaseApplication
{
    /**
     * Setup middlewares here
     *
     * Example:
     *
     * $this->loadMiddleware('RequestModifier');
     * $this->loadMiddleware(RequestModifierMiddleware::class);
     * $this->loadMiddleware('MyPlugin.RequestModifier')
     */
    protected function initialize() : void
    {
        $this->loadMiddleware(CsrfProtectionMiddleware::class, [
            'httpOnly' => true,
        ]);
        $this->loadMiddleware(MaintenanceModeMiddleware::class);
    }
}
