<?php
  var_dump($_GET);

  if ($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    include('delete_book.php');

    if ($execute) {

      // TODO: Message de succès de suppression du livre.

      // On redirige l'utilisateur vers la page
      // du formulaire.
      header('Location: admin.php');
    }

    // TODO: Message d'erreur de suppression du livre.
  }
?>
