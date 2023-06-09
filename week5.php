<?php
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedenmorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedenmiddag  ";
} else {
    echo "Goedenavond";
}

function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "het gemiddelde is: " . $gemiddelde;
}
berekenGemiddelde(5, 15);
function berekenDagenTotEindeJaar() {
    $huidigeDatum = date("Y-m-d");
    $eindeJaar = date("Y-12-31");
    $dagen = (strtotime($eindeJaar) - strtotime($huidigeDatum)) / (60 * 60 * 24);
    echo " Er zijn nog " . $dagen . " dagen tot het einde van het jaar. ";
}
berekenDagenTotEindeJaar();
function berekenTotaleLengte($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}

$array = array("Hello", "world", "!");
$lengte = berekenTotaleLengte($array);
echo "De totale lengte van de strings is: " . $lengte;


?>
