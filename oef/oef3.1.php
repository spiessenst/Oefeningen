<?php
$deler = 7;

for ($i = 0; $i <= 20; $i++) {

    $randomnr = random_int(100, 999);

    if (Deelbaardoor($randomnr, $deler) == true) {
        printf("%s is deelbaar door %s \n", $randomnr, $deler);
    }
    else{print $randomnr. "\n";}

}


function Deelbaardoor($getal, $deler)
{

    $modulo = $getal % $deler;

    if ($modulo == 0) {
        return true;
    }


}