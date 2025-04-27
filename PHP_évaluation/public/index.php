<?php
session_start();
// session_unset();
// session_destroy();



// Si les contacts n'existent pas dans la session, les charger depuis le fichier
if (!isset($_SESSION['contacts'])) {
    require_once __DIR__ . '/../src/contacts.php';
    $_SESSION['contacts'] = $contacts;
}

// Traitement du formulaire d'ajout de contact
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newContactName = $_POST['contactName'] ?? '';
    $newContactEmail = $_POST['contactEmail'] ?? '';

    if ($newContactName && $newContactEmail) {
        array_unshift($_SESSION['contacts'], [
          'id' => uniqid(),
          'name' => $newContactName,
          'email' => $newContactEmail,
          'favorite' => false,
        ]);
    } else {
        $error = 'Il faut renseigner un contact !';
    }
}

// Détection du mode édition
$isEditMode = false;
$editContact = null;

if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
    $editContactId = $_GET['id'];
    foreach ($_SESSION['contacts'] as $c) {
        if ($c['id'] === $editContactId) {
            $isEditMode = true;
            $editContact = $c;
            break;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once __DIR__ . '/../includes/head.php'; ?>
    <title>Contact Book</title>
</head>

<body>
    <div class="container">
        <header>

            <?php require_once __DIR__ . '/../includes/header.php' ?>

        </header>

        <div class="content">
            <div class="contact-container">
                <h1>Contact</h1>
                <form
                    action="<?= $isEditMode ? '/action.php?action=update&id=' . $editContact['id'] : '/' ?>"
                    method="post" class="contact-form">
                    <input type="text" placeholder="nom" name="contactName"
                        value="<?= $isEditMode ? htmlspecialchars($editContact['name']) : '' ?>">
                    <input type="email" placeholder="email" name="contactEmail"
                        value="<?= $isEditMode ? htmlspecialchars($editContact['email']) : '' ?>">
                    <button class="btn btn-primary" type="submit">
                        <?= $isEditMode ? 'Mettre à jour' : 'Ajouter' ?>
                    </button>
                </form>

                <ul class="contact-list">
                    <?php foreach ($_SESSION['contacts'] as $contact):?>
                    <li
                        class="contact-item <?= $contact['favorite'] ? 'favorite' : '' ?>">
                        <span
                            class="contact-name "><?= $contact['name'] ?></span>
                        <span
                            class="contact-name "><?= $contact['email'] ?></span>
                        <a
                            href="/action.php?action=addfavorite&id=<?=$contact['id']?>">
                            <button class="btn btn-small" aria-label="favori">⭐</button>
                        </a>
                        <a
                            href="?action=edit&id=<?=$contact['id']?>">
                            <button class="btn btn-primary btn-small">Modifier</button>
                        </a>
                        <a
                            href="/action.php?action=delete&id=<?=$contact['id']?>">
                            <button class="btn btn-danger btn-small">Supprimer</button>
                        </a>

                    </li>
                    <?php endforeach ?>
                </ul>




            </div>
        </div>

        <footer>
            <?php
            require_once __DIR__ . '/../includes/footer.php';
?>
        </footer>
    </div>

</body>

</html>