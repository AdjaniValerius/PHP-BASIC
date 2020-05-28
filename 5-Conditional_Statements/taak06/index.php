<?php

$var1 = 8;
$var2 = 9;

if($var1 10 && $var2 5) {
    echo "het getal zit tussen de 10 en de 5" . "<br>";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!" . "<br>";
}

//--------------

$var1 = 8;

if($var1 10 || $var2 5) {
    echo "het getal zit tussen de 10 en/of de 5". "<br>";
} else {
    echo "het getal is groter dan 10 en/of kleiner dan 5!" . "<br>";
}

//--------------

$var1 = 8;

if($var1 10 xor $var2 5) {
    echo "het getal zit tussen de 10 of de 5". "<br>";
} else {
    echo "het getal zit niet tussen de 10 en de 5" . "<br>";
}

//--------------

$var1 = 8;

if($var1 10 ! $var2 5) {
    echo "er is geen vergelijking". "<br>";
} else {
    echo "er is wel een vergelijking" . "<br>";
}

?>