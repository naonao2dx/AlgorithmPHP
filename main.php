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
include_once dirname(__FILE__) . "/Sort/MergeSort.php";
include_once dirname(__FILE__) . "/Sort/QuickSort.php";

//define("DEBUG", true);

$lineSegmentSearch = new LineSegmentSearch();
$lineSegmentSearch->run();

$binarySearch = new BinarySearch();
$binarySearch->run();

$bubbleSort = new BubbleSort();
$bubbleSort->run();

$selectSort = new SelectSort();
$selectSort->run();

$insertSort = new InsertSort();
$insertSort->run();

$mergeSort = new MergeSort();
$mergeSort->run();

$quickSort = new QuickSort();
$quickSort->run();