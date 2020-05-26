<?php

$test1 = 3;
$test2 = 6;

if($test1 == $test2){
    echo "<ul><li>gelijk</li></ul>" ;
}
else{
    echo "<ul><li>niet gelijk</li></ul>";
}


$test1 = 3;
$test2 = 6;

if($test1 = $test2){
    echo "<ul><li>ongelijk<li></ul>";
}
else{
    echo "<ul></li>niet ongelijk<li></ul>";
}


$test1 = 3;
$test2 = 6;

if($test1 != $test2){
    echo "<ul><li>identiek<li></ul>";
}
else{
    echo "<ul></li>apart<li></ul>";
}


$test1 = 3;
$test2 = 6;

if($test1 > $test2){
    echo "<ul><li>groter dan<li></ul>";
}
else{
    echo "<ul></li>niet groter dan<li></ul>";
}


$test1 = 3;
$test2 = 6;

if($test1 < $test2){
    echo "<ul><li>kleiner dan<li></ul>";
}
else{
    echo "<ul></li>niet kleiner dan<li></ul>";
}


$test1 = 3;
$test2 = 6;

if($test1 >= $test2){
    echo "<ul><li>groter en gelijk dan<li></ul>";
}
else{
    echo "<ul></li>niet groter en gelijk dan<li></ul>";
}


$test1 = 3;
$test2 = 6;

if($test1 <= $test2){
    echo "<ul><li>kleiner en gelijk dan<li></ul>";
}
else{
    echo "<ul></li>niet kleier en gelijk dan<li></ul>";
}

?>