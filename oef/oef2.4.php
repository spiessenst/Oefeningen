<?php

RechtsUitlijnen("banaan", 70);

RechtsUitlijnen("nog een banaan", 70);
RechtsUitlijnen("2.30 euro", 70);
RechtsUitlijnen("dit is een hele lange zin", 70);
RechtsUitlijnen("14.10 euro", 70);


function RechtsUitlijnen($tekst, $breedte)
{

    $aantal_space = $breedte - strlen($tekst);

    for ($i = 0; $i < $aantal_space; $i++) {

        print " ";
    }
    print $tekst . "\n";
}