<?php

$g1 = readline("Geef een getal: ");
$g2 = readline("Geef een getal: ");

print Euclides($g1 , $g2);

Function Euclides($g1 , $g2){

    while ($g1 != $g2){

        if ($g1 > $g2){
            $g1 = $g1 - $g2;
        }
        else{
            $g2 = $g2 - $g1;

        }
    }

    return $g1;

}