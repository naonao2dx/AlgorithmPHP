<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 2:06
 */
include_once dirname(__FILE__) . "/../Util/Util.php";

function selectSort($shuffleArray)
{
    println("Shuffle array: " . implode(" ", $shuffleArray));
    $calc = 0;
    $arrayUpdate = 0;
    $minupdate = 0;
    $starttime = microtime(true);

    for ($i = 0; $i < count($shuffleArray); $i++) {
        $minIndex = $i;
        $minValue = $shuffleArray[$i];
        for ($j = $i; $j < count($shuffleArray); $j++) {
            if ($shuffleArray[$j] < $minValue) {
                $minIndex = $j;
                $minValue = $shuffleArray[$j];
                $minupdate++;
            }
            $calc++;
        }
        debugPrintln("minIndex: {$minIndex}, minValue: {$minValue}");
        $shuffleArray[$minIndex] = $shuffleArray[$i];
        $shuffleArray[$i] = $minValue;
        $arrayUpdate++;
        debugPrintln("Arranged array: " . implode(" ", $shuffleArray));
    }
    $endtime = microtime(true);
    $calctime = $endtime - $starttime;

    println("Arranged array: " . implode(" ", $shuffleArray));
    println("Calc: {$calc}");
    println("Min update: {$minupdate}");
    println("Array and tmp update: {$arrayUpdate}");
    println("Calc time: " . sprintf('%0.5f', $calctime) . "秒");
    return $shuffleArray;
}
