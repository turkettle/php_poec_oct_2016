<?php
  $book_id = $_GET['id'];
  include('get_book.php');
 ?>

<div class="well">
  <p>
    Vouvlez-vous confirmer la suppression du livre <em>"<?php print $book['title']; ?>"</em> ?
  </p>
  <a href="admin.php" class="btn btn-success">Annuler</a>
  <a href="book_controller.php?action=delete&id=<?php print $_GET['id']; ?>" class="btn btn-danger">Supprimer</a>
</div>
