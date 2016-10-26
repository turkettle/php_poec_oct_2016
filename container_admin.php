<?php
    include('get_all_books.php');
?>

<div class="container main">

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Date de publication</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book) : ?>
                    <tr>
                        <td><?php print $book['id']; ?></td>
                        <td><?php print $book['title']; ?></td>
                        <td><?php print $book['author']; ?></td>
                        <td><?php print date('Y', $book['publish_date']); ?></td>
                        <td>
                            <a class="btn btn-info" href="add_book.php?id=<?php print $book['id']; ?>">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div><!-- /container -->