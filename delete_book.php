<?php

    // On importe la connexion en BDD.
    include('db.php');

    // On supprime le livre de la BDD.
    $query = $db->prepare("
        DELETE FROM book
        WHERE id=:id
    ");
    $query->bindValue(':id', $_GET['id']);
    $result = $query->execute();

    // On redirige l'utilisateur vers la page
    // du formulaire.
    // TODO: Message de succés d'insertion du livre.
    header('Location: admin.php');
?>