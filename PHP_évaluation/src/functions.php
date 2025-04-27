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
}

function addFavorite($id)
{
    foreach ($_SESSION['contacts'] as &$contact) {
        if ($contact['id'] === $id) {
            $contact['favorite'] = !$contact['favorite'];
            break;
        }
    }
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
}
