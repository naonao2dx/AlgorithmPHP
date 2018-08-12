<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 0:11
 */
include_once dirname(__FILE__) . "/../Base.php";

class BinarySearch extends Base
{
    function exec()
    {
        println("Search target: {$this->searchTarget}");

        $low = 0;
        $high = count($this->orderedArray) - 1;

        while ($low <= $high) {
            $middle = intval(($low + $high) / 2);
            debugPrintln("low is {$low}, high is {$high}");
            debugPrintln("middle is: {$middle}");

            if ($this->searchTarget == $this->orderedArray[$middle]) {
                break;
            } elseif ($this->searchTarget < $this->orderedArray[$middle]) {
                $high = $middle - 1;
            } elseif ($this->searchTarget > $this->orderedArray[$middle]) {
                $low = $middle + 1;
            }
        }

        if ($this->searchTarget != $this->orderedArray[$middle]) {
            println("Target is not found.");
            return;
        }

        println("Target index is " . $middle);
        return $middle;
    }

}

