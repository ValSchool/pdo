<?php
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedenmorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedenmiddag";
} else {
    echo "Goedenavond";
}
function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(5, 15);
?>
