<?php

$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

echo "<h2>Notes des étudiants</h2>";

echo "<table border='1' cellpadding='8'>";

echo "<tr>";
echo "<th>Étudiant</th>";
echo "<th>Note</th>";
echo "<th>Validation</th>";
echo "</tr>";

$somme = 0;
$nombreValides = 0;
$meilleureNote = 0;
$meilleurEtudiant = "";

foreach ($notes as $nom => $note) {

    // Validation
    if ($note >= 10) {
        $validation = "Validé";
        $nombreValides++;
    } else {
        $validation = "Non validé";
    }

    // Calcul de la somme
    $somme += $note;

    // Recherche de la meilleure note
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }

    echo "<tr>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . $validation . "</td>";
    echo "</tr>";
}

echo "</table>";

// Calcul de la moyenne
$moyenne = $somme / count($notes);

echo "<h3>Résultats</h3>";
echo "Somme des notes : " . $somme . "<br>";
echo "Moyenne de la classe : " . $moyenne . "<br>";
echo "Nombre d'étudiants validés : " . $nombreValides . "<br>";
echo "Meilleure note : " . $meilleureNote . "<br>";
echo "Meilleur étudiant : " . $meilleurEtudiant . "<br>";

?>