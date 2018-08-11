<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 1:07
 */
include_once dirname(__FILE__) . "/../Util/Util.php";

function bubbleSort($shuffleArray)
{
    println("Shuffle array: " . implode(" ", $shuffleArray));
    $calc = 0;
    $swap = 0;
    $starttime = microtime(true);

    for ($i = 1; $i < count($shuffleArray) - 1; $i++) {
        for ($j = count($shuffleArray) - 1; $i <= $j; $j--) {
            if ($shuffleArray[$j] < $shuffleArray[$j - 1]) {
                $tmp = $shuffleArray[$j];
                $shuffleArray[$j] = $shuffleArray[$j - 1];
                $shuffleArray[$j - 1] = $tmp;
                $swap++;
            }
            debugPrintln("array: " . implode(" ", $shuffleArray));
            $calc++;
        }
        debugPrintln();
    }
    $endtime = microtime(true);
    $calctime = $endtime - $starttime;

    println("Arranged array: " . implode(" ", $shuffleArray));
    println("Calc: {$calc}");
    println("Swap: {$swap}");
    println("Calc time: " . sprintf('%0.5f', $calctime) . "秒");
    return $shuffleArray;

}
