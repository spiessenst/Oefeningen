<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$aantal_deelnemers = readline("Hoeveel deelnemers ?");
$aantal_taarten = 15;

$aantalstukken= $aantal_deelnemers / $aantal_taarten;

printf ("Je moet de taarten in %s stukken snijden.", (int) $aantalstukken);