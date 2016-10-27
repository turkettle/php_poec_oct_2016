<?php

    // var_dump($_POST); die();

    // Si le titre est vide, on redirige l'utilisateur
    // vers la page du formulaire.
    if (empty($_POST['title'])) {
        // TODO: Message flash.
        header('Location: add_book.php');
    }

    // On importe la connexion en BDD.
    include('db.php');

    // On converti la date insérée dans le formulaire
    // en timestamp (nombre de secondes écoulées depuis
    // le 1er janvier 1977).
    $date = strtotime($_POST['publish_date']);

    // On insère les données du liver en base de donnée
    // grâce à une requête SQL et via la classe PDO.

    // Préparation de la requête et des données grâce
    // à la méthode (vocabulaire utilisé pour désigner
    // une fonction à l'intérieur d'une classe) prepare()
    // de PDO.

    if ($_POST['op'] == 'create') {
        $query = $db->prepare("
            INSERT INTO book
            (title, author, publish_date, body)
            VALUES (:title, :author, :publish_date, :body)
        ");
    }
    elseif ($_POST['op'] == 'update') {
        $query = $db->prepare("
            UPDATE book
            SET
            title=:title,
            author=:author,
            publish_date=:publish_date,
            body=:body
            WHERE id=:id
        ");
        $query->bindValue(':id', $_POST['book_id']);
    }

    $query->bindValue(':title', $_POST['title']);
    $query->bindValue(':author', $_POST['author']);
    $query->bindValue(':publish_date', $date);
    $query->bindValue(':body', $_POST['body']);

    // On exécute la requête.
    $result = $query->execute();

    // Débuggage.
    // var_dump($query->errorInfo());
    // var_dump($query);
    // var_dump($result);

    // On redirige l'utilisateur vers la page
    // du formulaire.
    // TODO: Message de succés d'insertion du livre.
    header('Location: admin.php');
?>
