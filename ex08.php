<?php


echo "<h2>Partie 1 : Nombres pairs de 0 à 20</h2>";

$i = 0;

while ($i <= 20) {

    if ($i == 10) {
        echo "<strong>" . $i . "</strong><br>";
    } else {
        echo $i . "<br>";
    }

    $i += 2;
}


echo "<h2>Partie 2 : while et do-while</h2>";

$compteur = 5;
$executionsWhile = 0;

while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

echo "Nombre d'exécutions de while : " . $executionsWhile . "<br>";

$compteur = 5;
$executionsDoWhile = 0;

do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "Nombre d'exécutions de do-while : " . $executionsDoWhile . "<br>";


echo "<h2>Partie 3 : continue et break</h2>";

for ($compteur = 1; $compteur <= 20; $compteur++) {

    if ($compteur >= 16) {
        break;
    }

    if ($compteur % 3 == 0) {
        continue;
    }

    echo $compteur . "<br>";
}

?>