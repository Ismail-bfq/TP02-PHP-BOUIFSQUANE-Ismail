<?php
// Exercice 10 - Partie A : traitement des donnees envoyees par GET
$groupesValides = ["G1", "G2", "G3", "G4"];
$message = "";
$erreur = "";

// 1) La page est-elle ouverte directement, sans formulaire ? (aucun champ recu)
if (!isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
    $erreur = "Aucune donnée reçue. Veuillez d'abord remplir le formulaire (ex10_get.html).";
}
// 2) Les champs sont presents : on verifie qu'ils sont des textes non vides
elseif (!is_string($_GET["nom"]) || !is_string($_GET["prenom"]) || !is_string($_GET["groupe"])) {
    $erreur = "Données invalides.";
} else {
    $nom    = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        $erreur = "Formulaire incomplet : le nom, le prénom et le groupe sont obligatoires.";
    } elseif (!in_array($groupe, $groupesValides, true)) {
        $erreur = "Groupe inconnu.";
    } else {
        // 3) On echappe avant d'afficher (protection contre l'injection HTML / XSS)
        $nomSur    = htmlspecialchars($nom,    ENT_QUOTES, "UTF-8");
        $prenomSur = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
        $groupeSur = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");
        $message = "Bienvenue $prenomSur $nomSur, vous êtes dans le groupe $groupeSur.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - Résultat GET</title>
</head>
<body>
    <h2>Résultat (méthode GET)</h2>
    <?php if ($erreur !== ""): ?>
        <p style="color: red;"><?= $erreur ?></p>
    <?php else: ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>
</html>