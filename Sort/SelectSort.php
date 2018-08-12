<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 2:06
 */
include_once dirname(__FILE__) . "/../Base.php";

class SelectSort extends Base
{
    function exec()
    {
        $arrangedArray = $this->randomArray;
        for ($i = 0; $i < count($arrangedArray); $i++) {
            $minIndex = $i;
            $minValue = $arrangedArray[$i];
            for ($j = $i; $j < count($arrangedArray); $j++) {
                if ($arrangedArray[$j] < $minValue) {
                    $minIndex = $j;
                    $minValue = $arrangedArray[$j];
                }
            }
            debugPrintln("minIndex: {$minIndex}, minValue: {$minValue}");
            $arrangedArray[$minIndex] = $arrangedArray[$i];
            $arrangedArray[$i] = $minValue;
            debugPrintln("Arranged array: " . implode(" ", $arrangedArray));
        }
    }

}
