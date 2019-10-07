<?php
include_once "Colorable.php";
include_once "Squares.php";
$squares = new Squares(4,4,"Blue");
echo $squares->howToColor();
