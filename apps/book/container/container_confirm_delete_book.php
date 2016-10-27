<?php
  $book_id = $_GET['id'];
  include('manager/get_book.php');
 ?>

<div class="well">
  <p>
    Vouvlez-vous confirmer la suppression du livre <em>"<?php print $book['title']; ?>"</em> ?
  </p>
  <a href="admin.php?app=book" class="btn btn-success">Annuler</a>
  <a href="controller/book_controller.php?app=book&action=delete&id=<?php print $_GET['id']; ?>" class="btn btn-danger">Supprimer</a>
</div>
