<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 11:42
 */
include_once dirname(__FILE__) . "/../Util/Util.php";

function insertSort($shuffleArray)
{
    println("Shuffle array: " . implode(" ", $shuffleArray));
    $calc = 0;
    $arrayUpdate = 0;
    $starttime = microtime(true);

    for ($i = 1; $i < count($shuffleArray); $i++) {
        debugPrintln("i = {$i}");
        $sortIndex = $i;
        for ($j = $i - 1; $j >= 0; $j--) {
           if ($shuffleArray[$i] < $shuffleArray[$j]) {
               $sortIndex = $j;
           } else {
               break;
           }
           $calc++;
        }
        debugPrintln("SortIndex = {$sortIndex}");

        if ($sortIndex != $i) {
            $tmp = $shuffleArray[$i];
            for ($k = $i - 1; $k >= $sortIndex; $k--) {
                $shuffleArray[$k + 1] = $shuffleArray[$k];
                $arrayUpdate++;
            }
            $shuffleArray[$sortIndex] = $tmp;
            $arrayUpdate++;
        }
        debugPrintln("Shuffle array: " . implode(" ", $shuffleArray));
    }
    $endtime = microtime(true);
    $calctime = $endtime - $starttime;

    println("Arranged array: " . implode(" ", $shuffleArray));
    println("Calc: {$calc}");
    println("Array and tmp update: {$arrayUpdate}");
    println("Calc time: " . sprintf('%0.5f', $calctime) . "秒");
    return $shuffleArray;
}
