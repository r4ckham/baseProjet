<?php
/**
 * Config - an example for setting up system settings.
 * When you are done editing, rename this file to 'Config.php'.
 *
 * @author David Carr - dave@daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 *
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */
namespace Core;

use Helpers\Session;

/**
 * Configuration constants and options.
 */
class Config
{
    /**
     * Executed as soon as the framework runs.
     */
    public function __construct()
    {
        /*
         * Turn on output buffering.
         */
        ob_start();

        /*
         * Define relative base path.
         */
        define('DIR', '/baseProjet/');
        define('ENV', 'DEV');

        /*
         * Set default controller and method for legacy calls.
         */
        define('DEFAULT_CONTROLLER', 'welcome');
        define('DEFAULT_METHOD', 'index');
        define('ASSETS_VERSION', '1_0_0_000000');

        /*
         * Set the default template.
         */
        define('TEMPLATE', 'default');

        /*
         * Set a default language.
         */
        define('LANGUAGE_CODE', 'fr');

        //database details ONLY NEEDED IF USING A DATABASE

        /*
         * Database engine default is mysql.
         */
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_PORT', '3306');
        define('DB_NAME', 'axa_blockchain');
        define('DB_USER', 'root');
        define('DB_PASS', 'root');
        define('PREFIX', 'smvc_');

        /*
         * Set prefix for sessions.
         */
        define('SESSION_PREFIX', 'smvc_');

        /*
         * Optional create a constant for the name of the site.
         */
        define('SITETITLE', 'V2.2');

        /*
         * Optional set a site email address.
         */
        //define('SITEEMAIL', '');

        /*
         * Turn on custom error handling.
         */
        set_exception_handler('Core\Logger::ExceptionHandler');
        set_error_handler('Core\Logger::ErrorHandler');

        /*
         * Set timezone.
         */
        date_default_timezone_set('Europe/Paris');

        /*
         * Start sessions.
         */
        Session::init();
    }
}
