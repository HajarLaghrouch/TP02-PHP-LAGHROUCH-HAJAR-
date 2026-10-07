<?php

$nombre = 7;

// Table de multiplication
echo "<h2>Table de multiplication de 7</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
}


// Pyramide
echo "<h2>Pyramide</h2>";

echo "<pre>";

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "</pre>";

?>