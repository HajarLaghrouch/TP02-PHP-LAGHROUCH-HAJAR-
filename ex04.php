<?php

$entier = 42;
$chaine = "42";
$flottant = 15.8;
$booleenVrai = true;
$booleenFaux = false;
$valeurNulle = null;

echo "<pre>";

echo "=== Types et valeurs ===\n";
var_dump($entier);
var_dump($chaine);
var_dump($flottant);
var_dump($booleenVrai);
var_dump($booleenFaux);
var_dump($valeurNulle);

$chaineEnEntier = (int) $chaine;
$flottantEnEntier = (int) $flottant;
$entierEnChaine = (string) $entier;

echo "\n=== Conversions ===\n";

echo "Conversion de \"42\" en entier : ";
var_dump($chaineEnEntier);

echo "Conversion de 15.8 en entier : ";
var_dump($flottantEnEntier);

echo "Conversion de 42 en chaîne : ";
var_dump($entierEnChaine);

echo "\n=== true et false avec echo ===\n";

echo "true avec echo : ";
echo true;

echo "\nfalse avec echo : ";
echo false;

echo "\n\n=== true et false avec var_dump() ===\n";

echo "true avec var_dump : ";
var_dump(true);

echo "false avec var_dump : ";
var_dump(false);

$zeroBool = (bool) 0;
$chaineZeroBool = (bool) "0";
$phpBool = (bool) "PHP";
$tableauVideBool = (bool) [];

echo "\n=== Conversions en booléens ===\n";

echo "0 en booléen : ";
var_dump($zeroBool);

echo "\"0\" en booléen : ";
var_dump($chaineZeroBool);

echo "\"PHP\" en booléen : ";
var_dump($phpBool);

echo "Tableau vide en booléen : ";
var_dump($tableauVideBool);

echo "</pre>";

?>