<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$aantal_deelnemers = readline("Hoeveel deelnemers ?");
$aantal_taarten = readline("Hoeveel taarten? ?");

$aantal_stukken_1 = intdiv($aantal_deelnemers, $aantal_taarten);

$aantal_stukken_2 = $aantal_stukken_1 + 1;

$aantal_taarten_2 = $aantal_deelnemers % $aantal_taarten;


$aantal_taarten_1 = $aantal_taarten - $aantal_taarten_2;


printf("Je moet %s taarten in %s stukken snijden.\n", $aantal_taarten_1, $aantal_stukken_1);
if ($aantal_taarten_2 != 0) {
    printf("En %s taarten in %s stukken.\n", $aantal_taarten_2, $aantal_stukken_2);

}


