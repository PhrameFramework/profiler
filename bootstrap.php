<?php
/**
 * Part of the Phrame
 *
 * @package    Profiler
 * @version    0.4.0
 * @author     Phrame Development Team
 * @license    MIT License
 * @copyright  2012 Phrame Development Team
 * @link       http://phrame.itworks.in.ua/
 */

namespace Phrame\Profiler;

use Phrame\Core;

/**
 * Bootstrap class
 */
class Bootstrap
{
    public static $profiler;

    /**
     * Loads and initializes extension
     * 
     * @param   string  $app_name  Application name
     * @return  void
     */
    public static function init($app_name = null)
    {
        require_once 'vendor/classes/PhpQuickProfiler.php';
        require_once 'vendor/classes/Console.php';
        require_once 'vendor/classes/MySqlDatabase.php';

        self::$profiler = new Profiler($app_name);
    }

}
