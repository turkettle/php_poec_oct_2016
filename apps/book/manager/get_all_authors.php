<?php

    // On importe la connexion en BDD.
    include('../../db.php');

    $query = $db->query('
      SELECT *
      FROM author
    ');
    $result = $query->execute();
    $authors = $query->fetchAll(PDO::FETCH_ASSOC);

    // Débuggage.
    // var_dump($query->errorInfo());
    // var_dump($query);
    // var_dump($result);
    // var_dump($books);
?>
