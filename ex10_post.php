<?php
// Exercice 10 - Partie A : traitement des donnees envoyees par POST
$groupesValides = ["G1", "G2", "G3", "G4"];
$message = "";
$erreur = "";

// 1) La page est-elle ouverte directement, sans formulaire ? (aucun champ recu)
if (!isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
    $erreur = "Aucune donnée reçue. Veuillez d'abord remplir le formulaire (ex10_post.html).";
}
// 2) Les champs sont presents : on verifie qu'ils sont des textes non vides
elseif (!is_string($_POST["nom"]) || !is_string($_POST["prenom"]) || !is_string($_POST["groupe"])) {
    $erreur = "Données invalides.";
} else {
    $nom    = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

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
    <title>Exercice 10 - Résultat POST</title>
</head>
<body>
    <h2>Résultat (méthode POST)</h2>
    <?php if ($erreur !== ""): ?>
        <p style="color: red;"><?= $erreur ?></p>
    <?php else: ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <p><a href="ex10_post.html">Retour au formulaire</a></p>
</body>
</html>