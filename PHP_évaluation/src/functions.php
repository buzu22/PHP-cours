<?php

function deleteContact($id)
{
    foreach ($_SESSION['contacts'] as $index => $contact) {
        if ($contact['id'] === $id) {
            unset($_SESSION['contacts'][$index]);
            $_SESSION['contacts'] = array_values($_SESSION['contacts']);
            break;
        }
    }
    saveContacts(); // Sauvegarde après suppression
}

function addFavorite($id)
{
    foreach ($_SESSION['contacts'] as &$contact) {
        if ($contact['id'] === $id) {
            $contact['favorite'] = !$contact['favorite'];
            break;
        }
    }
    saveContacts(); // Sauvegarde après modification
}

function updateContact($id, $newName, $newEmail)
{
    foreach ($_SESSION['contacts'] as &$contact) {
        if ($contact['id'] === $id) {
            $contact['name'] = $newName;
            $contact['email'] = $newEmail;
            break;
        }
    }
    saveContacts(); // Sauvegarde après mise à jour
}

function saveContacts()
{
    file_put_contents(__DIR__ . '/../src/data/contacts.json', json_encode($_SESSION['contacts'], JSON_PRETTY_PRINT));
}
