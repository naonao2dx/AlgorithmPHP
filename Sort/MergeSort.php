<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/13
 * Time: 1:43
 */

class MergeSort extends Base
{
    function exec()
    {
        $this->_mergeSort(0, count($this->randomArray) - 1);
        println("Arranged Array: " . implode(" ", $this->randomArray));
    }

    function _mergeSort($low, $high)
    {
        if ($high - $low < 1) return;

        $middle = intval(($low + $high) / 2);
        //debugPrintln("low: ${low}, middle: {$middle}, high: {$high}");

        $this->_mergeSort($low, $middle);
        $this->_mergeSort($middle + 1, $high);

        $this->_merge($low, $middle, $high);

    }

    function _merge($low, $middle, $high)
    {
        debugPrintln("Merge low: {$low}, middle: {$middle}, high: {$high}");
        $left = $low;
        $right = $middle + 1;
        $result = array();

        while ($left <= $middle && $right <= $high) {
            if ($this->randomArray[$left] < $this->randomArray[$right]) {
                $result[] = $this->randomArray[$left];
                $left++;
            } else {
                $result[] = $this->randomArray[$right];
                $right++;
            }
        }

        while ($left <= $middle) {
            $result[] = $this->randomArray[$left];
            $left++;
        }

        while ($right <= $high) {
            $result[] = $this->randomArray[$right];
            $right++;
        }

        $index = 0;

        for ($i = $low; $i <= $high; $i++) {
            $this->randomArray[$i] = $result[$index];
            $index++;
        }
        debugPrintln("Result Array: " . implode(" ", $result));
        debugPrintln("Arranged Array: " . implode(" ", $this->randomArray));
    }
}