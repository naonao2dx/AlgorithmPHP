<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/11
 * Time: 23:28
 */
include_once dirname(__FILE__) . "/../Base.php";

class LineSegmentSearch extends Base
{
    public function exec()
    {
        println("Search target: {$this->searchTarget}");

        foreach ($this->randomArray as $key => $value) {
            if ($this->searchTarget == $value) {
                println("Target index is {$key}");
                return;
            }
        }
        println("Target is not found.");
    }
}
