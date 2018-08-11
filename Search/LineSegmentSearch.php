<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/11
 * Time: 23:28
 */
include_once dirname(__FILE__) . "/../Util/Util.php";

function lineSegmentSearch($target, $array)
{
    println("Target: {$target}");
    println("Array: " . implode(" ", $array));

    foreach ($array as $key => $value) {
        if ($target == $value) {
            println("Target index is {$key}");
            return $key;
        }
    }

    println("Target is not found.");
    return;
}