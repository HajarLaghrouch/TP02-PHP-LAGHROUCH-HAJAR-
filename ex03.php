<?php

define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixHT = 60;
$quantite = 3;

$totalHT = $prixHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;

$totalTTC += 15;

echo "<h1>Récapitulatif</h1>";

echo "Prix unitaire HT : " . $prixHT . " " . DEVISE . "<br>";
echo "Quantité : " . $quantite . "<br>";
echo "Total HT : " . $totalHT . " " . DEVISE . "<br>";
echo "TVA : " . $montantTVA . " " . DEVISE . "<br>";
echo "Total TTC : " . ($totalHT + $montantTVA) . " " . DEVISE . "<br>";
echo "Frais de livraison : 15 " . DEVISE . "<br>";
echo "Montant final : " . $totalTTC . " " . DEVISE . "<br>";

if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA existe.";
}

?>