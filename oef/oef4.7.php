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
    $paragraaf = null;

    foreach ($woorden as $woord) {
        if ($lijnlengte + strlen($woord) > $breedte) {
            $lijnlengte = 0;
            $paragraaf .= "\n";
        } else {
            $woord = $woord . " ";
            $lijnlengte += strlen($woord);
            $paragraaf .= $woord;
        }
    }
    return $paragraaf;
}
print SplitParagraph($tekst, 30);
print "\n\n";
print SplitParagraph($tekst, 50);
