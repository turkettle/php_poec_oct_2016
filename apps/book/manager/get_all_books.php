<?php

    // On importe la connexion en BDD.
    include('../../db.php');

    $query = $db->query('
      SELECT
      b.id AS book_id, b.title, b.publish_date, b.body,
      a.id AS author_id, a.name AS author_name
      FROM book AS b
      INNER JOIN author As a
      ON b.author = a.id
    ');
    $result = $query->execute();
    $books = $query->fetchAll(PDO::FETCH_ASSOC);

    // Débuggage.
    // var_dump($query->errorInfo());
    // var_dump($query);
    // var_dump($result);
    // var_dump($books);
?>
