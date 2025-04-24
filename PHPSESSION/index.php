<?php
session_start(); // Démarre ou reprend une session
// session_unset(); // (commenté) Effacerait les variables de session
// session_destroy(); // (commenté) Détruirait complètement la session

require_once __DIR__ . '/data.php'; // Importe la variable $title de data.php

// Cette ligne est importante : utilise l'opérateur de fusion null (??)
// Si $_SESSION['newTitle'] existe déjà, on garde sa valeur
// Sinon, on utilise $title (importé de data.php)
$_SESSION['newTitle'] = $_SESSION['newTitle'] ?? $title;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["newTitle"] ?></title> <!-- Titre de l'onglet -->
</head>
<body>
    <h1><?= $_SESSION["newTitle"]?></h1> <!-- Titre affiché sur la page -->
    <!-- Un lien qui mène à cible.php avec un paramètre GET "newTitle" -->
    <a href="cible.php?newTitle=Bienvenue">Modifier le titre</a>
</body>
</html>