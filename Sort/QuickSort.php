<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/14
 * Time: 10:52
 */
include_once dirname(__FILE__) . "/../Base.php";

class QuickSort extends Base
{
    public function exec()
    {
        $this->_quickSort(0, count($this->randomArray) - 1);
        println("Arranged Array: " . implode(" ", $this->randomArray));
    }

    private function _quickSort($low, $high)
    {
        debugPrintln("low: {$low}, high: {$high}");

        if ($low == $high) {
            return;
        }

        $continue = $high - 1;
        for ($left = $low; $left <= $high; $left++) {
            if ($this->randomArray[$left] > $this->randomArray[$high]) {
                for ($right = $continue; $right >= $left; $right--) {
                    if ($left == $right) {
                        $tmp = $this->randomArray[$right];
                        $this->randomArray[$right] = $this->randomArray[$high];
                        $this->randomArray[$high] = $tmp;
                        debugPrintln("Array: " . implode(" ", $this->randomArray));
                        if (0 < $right) {
                            $this->_quickSort($low, $right - 1);
                        }
                        if ($right < $high) {
                            $this->_quickSort($right + 1, $high);
                        }
                        return;
                    }
                    if ($this->randomArray[$right] < $this->randomArray[$high]) {
                        $tmp = $this->randomArray[$left];
                        $this->randomArray[$left] = $this->randomArray[$right];
                        $this->randomArray[$right] = $tmp;
                        $continue = $right;
                        debugPrintln("Array: " . implode(" ", $this->randomArray));
                        break;
                    }
                }
            }
            if ($left == $high) {
                $this->_quickSort($low, $high - 1);
                return;
            }
        }
    }
}

function test()
{
    for ($i = 0; $i < 10; $i++) {
        echo "abcd";
    }
}
