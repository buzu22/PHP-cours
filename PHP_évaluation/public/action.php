<?php

session_start();

// On inclut les vraies fonctions cachées
require_once __DIR__ . '/../src/functions.php';

// Ici, tu récupères action et id depuis l'URL
$action = $_GET['action'] ?? null;
$id = $_GET['id'] ?? null;

// Appelle directement ce que tu veux (car functions.php est déjà chargé)

if ($action && $id) {
    if ($action === 'delete') {
        deleteContact($id);
    } elseif ($action === 'addfavorite') {
        addFavorite($id);
    } elseif ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $newName = $_POST['contactName'] ?? '';
        $newEmail = $_POST['contactEmail'] ?? '';
        updateContact($id, $newName, $newEmail);
    }
}

// Après action -> Retour à la page d'accueil
header('Location: /');
exit;
