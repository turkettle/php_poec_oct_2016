<?php

    // Si on a une valeur d'ID de livre, on fait
    // la requête.
    if ($book_id != FALSE) {

        // On importe la connexion en BDD.
        include('../../db.php');

        $query = $db->prepare('SELECT * FROM book WHERE id=:id');
        $query->bindValue(':id', $book_id);
        $result = $query->execute();
        $book = $query->fetch(PDO::FETCH_ASSOC);
    }
    // Sinon on créé une variable $book à FALSE.
    else {
        $book = FALSE;
    }

    // Débuggage.
    // var_dump($query->errorInfo());
    // var_dump($query);
    // var_dump($result);
    // var_dump($book);
?>
