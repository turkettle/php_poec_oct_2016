<?php
    include('manager/get_all_books.php');
?>

<div class="container main">

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Parution</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) : ?>
                    <tr>
                        <td><?php print $book['book_id']; ?></td>
                        <td><?php print $book['title']; ?></td>
                        <td><?php print $book['author_name']; ?></td>
                        <td><?php print date('Y', $book['publish_date']); ?></td>
                        <td>
                            <a class="btn btn-info" href="add_book.php?app=book&action=update&id=<?php print $book['book_id']; ?>">Modifier</a>
                            <a class="btn btn-danger" href="confirm_delete_book.php?app=book&action=delete&id=<?php print $book['book_id']; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div><!-- /container -->
