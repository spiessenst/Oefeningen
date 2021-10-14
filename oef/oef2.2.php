<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$lengte_kamer = 700;
$breedte_kamer = 500;
$tegel_x = 70;
$tegel_y = 50;

$aantal_tegels_lengte = intdiv($lengte_kamer, $tegel_x);
$modulo_lengte = $lengte_kamer % $tegel_x;

if ($modulo_lengte > 0) {
    $aantal_tegels_lengte++;
}


$aantal_tegels_breedte = intdiv($breedte_kamer, $tegel_y);
$modulo_breedte = $breedte_kamer % $tegel_y;
if ($modulo_breedte > 0) {
    $aantal_tegels_breedte++;
}


$aantal_tegels_totaal = $aantal_tegels_lengte * $aantal_tegels_breedte;

printf("Je moet %s tegels van 0.3 x 0.3 meter kopen voor een kamer van 7 op 5 meter.", $aantal_tegels_totaal);

