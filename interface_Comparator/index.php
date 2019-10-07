<?php
include_once "comparator.php";
include_once "circle.php";
include_once "circleComparator.php";

$circleOne = new Circle(5);
$circleTwo = new Circle(10);
$circleComparator = new CircleComparator();

echo $circleComparator->compare($circleOne,$circleTwo);
