<?php

$kapitaal= readline("Wat is het kapitaal: ");
$intrest = readline("Wat is de interst: ");
$looptijd = readline("Wat is de looptijd: ");
$limietvraag = readline("Is er een limiet ? (j/n)");
$limiet = 0;


if ($limietvraag == "j") {
    $limiet = readline("Wat is de limiet: ");}
else {
    $limiet = null;
}

print UitLijnenRechts("Jaar", 20);
print UitLijnenRechts("Kapitaal", 20);
print UitLijnenRechts("Rente", 20) . "\n";


for ($i = 1; $i <= $looptijd; $i++) {


    $rente = $kapitaal * ($intrest / 100);
    $rente = number_format($rente, 2, '.', '');
    $kapitaal = number_format($kapitaal, 2, '.', '');
    printf("%s%s%s", UitLijnenRechts($i, 20), UitLijnenRechts($kapitaal, 20), UitLijnenRechts($rente, 20) . "\n");
    $kapitaal += $rente;

    if ($limiet and $limiet <= $kapitaal) {

        break;
    }


}

function UitLijnenRechts($tekst, $breedte)
{
    $breedte = $breedte - strlen($tekst);
    $spaties = "";
    for ($x = 0; $x < $breedte; $x++) {
        $spaties .= " ";
    }
    return $spaties . $tekst;
}