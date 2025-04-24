<?php
session_start(); // Récupère la même session que dans index.php

// Importe le même fichier data.php pour avoir accès à $title
require_once __DIR__ . '/data.php';

// Cette ligne initialise $_SESSION["newTitle"] avec $title
// Mais c'est en fait redondant car cette variable existe déjà normalement
$_SESSION["newTitle"] = $title;

// Cette ligne récupère la valeur du paramètre GET "newTitle"
// Si ce paramètre existe, on l'utilise; sinon on garde $title
$_SESSION["newTitle"] = $_GET["newTitle"] ?? $title;

// Redirige immédiatement l'utilisateur vers la page d'accueil
header("Location:/");
?>