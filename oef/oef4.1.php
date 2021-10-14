<?php
$lijst = [ 14, 5, 8, 9, 13, 18, 16, 25 ];
$G = Gemiddelde( $lijst ) ;
$G2 = Gemiddelde2( $lijst ) ;
print( $G. "\n" );
print( $G2. "\n" );

function Gemiddelde($lijst){

    $totaalsom = array_sum($lijst);
    $elementen = count($lijst);

    return $totaalsom / $elementen;

}

function Gemiddelde2($lijst){

    foreach ($lijst as $cijfer){

        $totaalsom +=  $cijfer;
        $elementen += 1 ;
    }
    return $totaalsom / $elementen;

}