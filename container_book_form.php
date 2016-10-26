<?php

    $book_id = isset($_GET['id']) ? $_GET['id'] : FALSE;
    include('get_book.php');
    include('preprocess_book_form.php');
?>

<div class="container main">

    <form class="form-horizontal" action="save_book.php" method="POST">

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Titre</label>
            <div class="col-sm-4">
                <input type="text" name="title" value="<?php print $title; ?>" class="form-control" id="title" placeholder="Titre" required>
            </div>
        </div>

        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Auteur</label>
            <div class="col-sm-4">
                <input type="text" name="author" value="<?php print $author; ?>" class="form-control" id="author" placeholder="Auteur">
            </div>
        </div>
        
        <div class="form-group">
            <label for="publish_date" class="col-sm-2 control-label">Date de publication</label>
            <div class="col-sm-4">
                <input type="date" name="publish_date" value="<?php print $publish_date; ?>" class="form-control" id="publish_date" placeholder="Date de publication">
            </div>
        </div>
        
        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-4">
                <textarea name="body" class="form-control" id="body" placeholder="Description" rows="10"><?php print $body; ?></textarea>
            </div>
        </div>

        <input type="hidden" name="book_id" value="<?php print $book_id; ?>">
        <input type="hidden" name="op" value="<?php print $op; ?>">

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sauvegarder</button>
            </div>
        </div>
    </form>

</div><!-- /container -->