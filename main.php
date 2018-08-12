<?php
/**
 * Created by PhpStorm.
 * User: takeuchi
 * Date: 2018/08/11
 * Time: 23:25
 */

include_once dirname(__FILE__) . "/Search/LineSegmentSearch.php";
include_once dirname(__FILE__) . "/Search/BinarySearch.php";
include_once dirname(__FILE__) . "/Sort/BubbleSort.php";
include_once dirname(__FILE__) . "/Sort/SelectSort.php";
include_once dirname(__FILE__) . "/Sort/InsertSort.php";
include_once dirname(__FILE__) . "/Util/Util.php";

define("DEBUG", true);

$target = 10;
$min = 1;
$max = 1000;
if (defined("DEBUG")) {
  $max = 10;
}
$originalArray = range($min, $max);
$shuffleArray = $originalArray;
shuffle($shuffleArray);

println("LineSegmentSearch:");
lineSegmentSearch($target, $shuffleArray);
println();

println("BinarySearch:");
binarySearch($target, $originalArray);
println();

println("BubbleSort");
bubbleSort($shuffleArray);
println();

println("SelectSort");
selectSort($shuffleArray);
println();

println("InsertSort");
insertSort($shuffleArray);
println();
