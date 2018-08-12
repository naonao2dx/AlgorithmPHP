<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 11:42
 */
include_once dirname(__FILE__) . "/../Base.php";

class InsertSort extends Base
{
    function exec()
    {
        $arrangedArray = $this->randomArray;

        for ($i = 1; $i < count($arrangedArray); $i++) {
            debugPrintln("i = {$i}");
            $sortIndex = $i;
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($arrangedArray[$i] < $arrangedArray[$j]) {
                    $sortIndex = $j;
                } else {
                    break;
                }
            }
            debugPrintln("SortIndex: {$sortIndex}");

            if ($sortIndex != $i) {
                $tmp = $arrangedArray[$i];
                for ($k = $i - 1; $k >= $sortIndex; $k--) {
                    $arrangedArray[$k + 1] = $arrangedArray[$k];
                }
                $arrangedArray[$sortIndex] = $tmp;
            }
            debugPrintln("Arranged array: " . implode(" ", $arrangedArray));
        }
    }
}
