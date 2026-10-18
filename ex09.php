<?php
$notes = [
    "Amine"   => 12,
    "Sara"    => 16,
    "Youssef" => 8,
    "Lina"    => 14,
    "Adam"    => 10
];

$seuil = 10;
$somme = 0;
$nbValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

$lignes = "";
foreach ($notes as $nom => $note) {
    if ($note >= $seuil) {
        $statut = "Validé";
        $nbValides++;
    } else {
        $statut = "Non validé";
    }

    $somme += $note;

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }

    $lignes .= "<tr><td>$nom</td><td>$note</td><td>$statut</td></tr>\n";
}

$moyenne = $somme / count($notes);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px 14px; }
    </style>
</head>
<body>
    <h2>Notes des étudiants</h2>
    <table>
        <tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr>
        <?= $lignes ?>
    </table>

    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Nombre d'étudiants ayant validé : <?= $nbValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>
</body>
</html>