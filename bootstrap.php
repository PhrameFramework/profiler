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

class Bootstrap
{
    public static $profiler;

    /**
     * Loads and initializes extension
     * 
     * @param   \Phrame\Core\Application  $app  Application object
     * @return  void
     */
    public static function init($app = null)
    {
        $app = $app ?: Core\Applications::instance();

        require_once 'vendor/classes/PhpQuickProfiler.php';
        require_once 'vendor/classes/Console.php';
        require_once 'vendor/classes/MySqlDatabase.php';

        self::$profiler = new Profiler($app);
    }

}
