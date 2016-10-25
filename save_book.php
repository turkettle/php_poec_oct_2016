<?php

    var_dump($_POST);    

    if (empty($_POST['title'])) {
        header('Location: add_book.php');
    }

    include('db.php');

    $date = strtotime($_POST['publish_date']);

    $query = $db->prepare("INSERT INTO book (title, author, publish_date, body) VALUES (:title, :author, :publish_date, :body)");
    $query->bindValue(':title', $_POST['title']);
    $query->bindValue(':author', $_POST['author']);
    $query->bindValue(':publish_date', $date);
    $query->bindValue(':body', $_POST['body']);

    $result = $query->execute();

    var_dump($query->errorInfo());
    var_dump($query);
    var_dump($result);
?>