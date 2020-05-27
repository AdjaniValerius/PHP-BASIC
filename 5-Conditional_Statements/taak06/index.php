<?php

$var1 = 8;

if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5" . "<br>";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!" . "<br>";
}

//--------------

$var1 = 8;

if($var1 < 10 || $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5". "<br>";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!" . "<br>";
}

//--------------

$var1 = 8;

if($var1 < 10 xor $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5". "<br>";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!" . "<br>";
}

//--------------

$var1 = 8;

if($var1 < 10 ! $var1 > 5) {
    echo "het getal zit niet tussen de 10 en de 5". "<br>";
} else {
    echo "het getal is groter dan 10 of kleiner dan 5!" . "<br>";
}

?>