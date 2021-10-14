<?php
$stemmen = [
    "NVA" => 2455,
    "SP-A" => 2856,
    "CD&V" => 1501,
    "GROEN" => 1744,
    "OPEN-VLD" => 1988,
    "VLAAMSBELANG" => 586,
    "PVDA" => 697
];

$totaalaantalstemmen = array_sum($stemmen);


printf("Totaal aantal stemmen: %s\n\n", $totaalaantalstemmen);

foreach ($stemmen as $partij => $stem) {


    $percent = GeefPercent($stem, $totaalaantalstemmen);
    $lijn = Uitlijnen($partij, $percent, 50);
    $percent_arr[$partij] = $percent;
    printf("%s\n", $lijn);


}

    $totaalpercent = array_sum($percent_arr);


$totaalpercent = number_format($totaalpercent, 2, '.', '');
$lijnpercent = Uitlijnen("Totaal van de percentages:", $totaalpercent, 50);
printf("\n%s", $lijnpercent);

function GeefPercent($stem, $totaalaantalstemmen)
{
    $percent = ($stem / $totaalaantalstemmen) * 100;
    $percent = number_format($percent, 2, '.', '');
    return $percent;
}

function Uitlijnen($partij, $stem, $breedte)
{

    $aantal_space = $breedte - strlen($partij) - strlen($stem);

    $space = str_repeat(' ', $aantal_space);

    return $partij . $space . $stem;


}

