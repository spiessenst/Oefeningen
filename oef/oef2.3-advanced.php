<?php


$doorsnede1 = 8;
$doorsnede2= 12;
$hoogte = 6;

$straal1 = straal($doorsnede1);
$straal2 = straal($doorsnede2);

$volume = inhoudBad($straal1 , $straal2 , $hoogte) ;
print $volume;

function inhoudBad($straal1 , $straal2 , $hoogte)
{
    $inhoud = 1/3 * pi()*$hoogte * (($straal2 ** 2) + $straal2*$straal1 + ( $straal1 **2 ));
    return round($inhoud , 2);
}

function straal($doorsnede)
{
    return $doorsnede / 2;
}