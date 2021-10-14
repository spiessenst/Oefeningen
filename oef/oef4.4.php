<?php

$student = [
    "voornaam" => "Jan",
    "naam" => "Janssens",
    "straat" => "Oude baan",
    "huisnr" => "22",
    "postcode" => 2800,
    "gemeente" => "Mechelen",
    "geboortedatum" => "14/05/1991",
    "telefoon" => "015 24 24 26",
    "e-mail" => "jan.janssens@gmail.com"
];

print StudentToTable($student);

function StudentToTable($student)
{
    $html = null;

    $html .= "<h1>Student</h1>\n<table>\n" ;

    foreach ($student as $key => $value) {
        $html .= "<tr><td>" . ucfirst($key) . "</td><td>" . $value . "</td></tr>\n";
    }
    $html .= ("</table>");
    return $html;
}