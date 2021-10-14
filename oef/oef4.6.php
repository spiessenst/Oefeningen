<?php
$tekst = "Ruim 50.000 kandidaten hengelen in Vlaanderen naar uw stem en hopen " .
    "straks gemeenteraadslid te worden. Het is maar de vraag of ze zo blij gaan " .
    "zijn als die droom in vervulling gaat. De inzet van de lokale verkiezingen, op " .
    "14 oktober, is heel precies in cijfers vastgelegd: er moeten 7.398 nieuwe " .
    "gemeenteraadsleden verkozen worden, verspreid over de 308 Vlaamse " .
    "gemeenten, plus 175 nieuwe provincieraadsleden.";

function SplitParagraph($tekst, $breedte)
{
    $lijnlengte = 0;
    $woorden = explode(" ", $tekst);

    for ($i = 0; $i < count($woorden); $i++) {

        $woord = $woorden[$i] . " ";

        if ($lijnlengte + strlen($woord) -1 > $breedte) {
            print "\n";
            $lijnlengte = 0;
        }
        print $woord;
        $lijnlengte += strlen($woord) ;
    }
}
SplitParagraph($tekst, 40);
