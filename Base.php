<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/13
 * Time: 0:42
 */
include_once dirname(__FILE__) . "/Util/Util.php";

class Base
{
    protected $orderedArray;
    protected $randomArray;
    protected $min;
    protected $max;
    protected $searchTarget;

    public function __construct()
    {
        $this->min = 0;
        $this->max = defined("DEBUG") ? 9 : 300;
        $this->orderedArray = range($this->min, $this->max);
        $this->randomArray = $this->orderedArray;
        shuffle($this->randomArray);
        $this->searchTarget = 6;
    }

    public function run()
    {
        println("/**** " . get_class($this) . " ****/");
        println("Ordered array: " . implode(" ", $this->orderedArray));
        println("Random array: " . implode(" ", $this->randomArray));

        $starttime = microtime(true);
        $this->exec();
        $endtime = microtime(true);
        $exectime = $endtime - $starttime;
        println("Exec time: " . sprintf('%0.5f', $exectime) . "秒");
        println();
    }

    public function exec()
    {
    }
}
