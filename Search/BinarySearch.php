<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/12
 * Time: 0:11
 */
include_once dirname(__FILE__) . "/../Util/Util.php";

function binarySearch($target, $array)
{
    println("Target: {$target}");
    println("Array: " . implode(" ", $array));

    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $middle = intval(($low + $high) / 2);
        debugPrintln("low is {$low}, high is {$high}");
        debugPrintln("middle is: {$middle}");

        if ($target == $array[$middle]) {
           break;
        } elseif ($target < $array[$middle]) {
            $high = $middle - 1;
        } elseif ($target > $array[$middle]) {
            $low = $middle + 1;
        }
    }

    if ($target != $array[$middle]) {
        println("Target is not found.");
        return;
    }

    println("Target index is " . $middle);
    return $middle;
}
