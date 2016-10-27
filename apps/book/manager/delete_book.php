<?php

    // On importe la connexion en BDD.
    include('../../../db.php');

    // On supprime le livre de la BDD.
    $query = $db->prepare("
        DELETE FROM book
        WHERE id=:id
    ");
    $query->bindValue(':id', $id);
    $execute = $query->execute();
?>
