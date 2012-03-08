<?php
/**
 * Part of the Phrame
 *
 * @package    Profiler
 * @version    0.3.0
 * @author     Phrame Development Team
 * @license    MIT License
 * @copyright  2012 Phrame Development Team
 * @link       http://phrame.itworks.in.ua/
 */

namespace Phrame\Profiler;

use Phrame\Core;

class Profiler
{
    /**
     * Profiler object
     * 
     * @var  \PhpQuickProfiler
     */
    protected $profiler;

    /**
     * DB profiler object
     * 
     * @var  \MySqlDatabase
     */
    protected $db;

    /**
     * Creates profiler
     * 
     * @param   Core\Application  $application  Application object
     * @return  void
     */
    public function __construct($application)
    {
        $this->profiler = new \PhpQuickProfiler(\PhpQuickProfiler::getMicroTime());
    }

    /**
     * Outputs profiler data
     * 
     * @return  void
     */
    public function __destruct()
    {
        $this->profiler->display($this->db);
    }

    /**
     * Logs data
     * 
     * @param   string  $data  Data to log
     * @return  void
     */
    public function log($data)
    {
        \Console::log($data);
    }

}
