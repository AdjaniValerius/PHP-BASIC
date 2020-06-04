<?php

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}

function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 0 ;
    return $productnummer;
}

function getAmount(){
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    return $aantalProd;
}

function totaalPrijs()
{
    $itemsPrijs = array (0.1, 0.15, 0.20, 0.25, 0.30, 0.35, 0.40, 0.45, 0.50, 0.60);

                  //4        *        2  = 8
    if(isset($_GET['aantal']) && isset($_GET['productnummer'])  ){
        $totaalprijs = getAmount() * $itemsPrijs[ getProductNr() ];
        echo $totaalprijs;

    }
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function korting()
{
    if( $totaalPrijs < 16)
        echo $korting
}

?>