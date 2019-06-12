<?php
namespace App\Controller;

use Origin\Controller\Controller;
use Origin\I18n\I18n;

class AppController extends Controller
{
    /**
     * This is called immediately after construct, so you don't have
     * to overload it. Load and configure components, helpers etc.
     */
    public function initialize()
    {
        parent::initialize();

        /**
         * Core components to be loaded by default.
         */
        $this->loadComponent('Session');
        $this->loadComponent('Cookie');
        $this->loadComponent('Flash');

        /**
         * Load Core Helpers (Helpers will be lazy loaded)
         */
        $this->loadHelper('Session');
        $this->loadHelper('Cookie');
        $this->loadHelper('Flash');
        $this->loadHelper('Html');
        $this->loadHelper('Form');
        $this->loadHelper('Number');
        $this->loadHelper('Date');

        /**
         * Configure your locale settings here. OriginPHP ships with en_US and en_GB locales
         * by default. For others you can run the following command and it will create the locale
         * settings in config/locale.
         * $ bin/console locales:generate zh-CN ru-RU fr-FR es-ES de-DE it-IT ja-JP
         */
        I18n::initialize(['locale'=>'en_US','language'=>'en','timezone'=>'UTC']);
    }

    /**
     * This is called before the controller action is executed but after initialize.
     */
    public function beforeFilter()
    {
    }

    /**
     * This is called after the after the action has been run before the view has
     * been rendered but beore the after filter.
     */
    public function beforeRender()
    {
    }

    /**
     * This is called after the controller action is executed, and view has been rendered
     * but before it has been sent to the client.
     */
    public function afterFilter()
    {
    }

    /**
    * Callback just prior to redirecting
    */
    public function beforeRedirect()
    {
    }
}
