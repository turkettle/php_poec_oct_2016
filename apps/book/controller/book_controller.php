<?php

  if ($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    include('../manager/delete_book.php');

    if ($execute) {

      // TODO: Message de succès de suppression du livre.

      // On redirige l'utilisateur vers la page
      // du formulaire.
      header('Location: ../admin.php?app=book');
    }

    // TODO: Message d'erreur de suppression du livre.
  }
  elseif ($_GET['action'] == 'create' || $_GET['action'] == 'update') {

    $book_id = isset($_GET['id']) ? $_GET['id'] : FALSE;
    include('manager/get_book.php');

    $title = $book == FALSE ? NULL : $book['title'];
    $author = $book == FALSE ? NULL : $book['author'];
    $publish_date = $book == FALSE ? NULL : date('Y-m-d',$book['publish_date']);
    $body = $book == FALSE ? NULL : $book['body'];
    $book_id = $book == FALSE ? NULL : $book['id'];
    $op = $book == FALSE ? 'create' : 'update';

    include('manager/get_all_authors.php');
  }
?>
