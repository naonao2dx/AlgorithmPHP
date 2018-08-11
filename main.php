<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/11
 * Time: 23:25
 */

include_once dirname(__FILE__) . "/Search/LineSegmentSearch.php";
include_once dirname(__FILE__) . "/Search/BinarySearch.php";
include_once dirname(__FILE__) . "/Util/Util.php";

define("DEBUG", true);

$target = 10;
$originalArray = range(1, 10);
$shuffleArray = $originalArray;
shuffle($shuffleArray);

println("LineSegmentSearch:");
lineSegmentSearch($target, $shuffleArray);
println();

println("BinarySearch:");
binarySearch($target, $originalArray);
println();

