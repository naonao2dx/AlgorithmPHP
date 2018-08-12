<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 1:07
 */
include_once dirname(__FILE__) . "/../Base.php";

class BubbleSort extends Base
{
    function exec()
    {
        $arrangedArray = $this->randomArray;

        for ($i = 1; $i < count($arrangedArray); $i++) {
            for ($j = count($arrangedArray) - 1; $i <= $j; $j--) {
                if ($arrangedArray[$j] < $arrangedArray[$j - 1]) {
                    $tmp = $arrangedArray[$j];
                    $arrangedArray[$j] = $arrangedArray[$j - 1];
                    $arrangedArray[$j - 1] = $tmp;
                }
                debugPrintln("array: " . implode(" ", $arrangedArray));
            }
        }
        println("Arranged array: " . implode(" ", $arrangedArray));
    }

}

