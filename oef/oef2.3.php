<?php

$doorsnede = 3;
$hoogte = 0.5;

$volume= (oppervlakte(straal($doorsnede)) * $hoogte) * 1000;
print $volume;
function oppervlakte( $straal )
{
    $opp = round($straal ** 2 * pi(), 2);
    return $opp;
}

function straal($doorsnede){
    return $doorsnede /2;
}