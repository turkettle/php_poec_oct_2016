<?php    

    // On importe la connexion en BDD.
    include('db.php');

    $query = $db->query('SELECT id, title, author, publish_date FROM book');
    $result = $query->execute();
    $books = $query->fetchAll(PDO::FETCH_ASSOC);

    // Débuggage.
    // var_dump($query->errorInfo());
    // var_dump($query);
    // var_dump($result);
    // var_dump($books);
?>