<?php
    $title = $book == FALSE ? NULL : $book['title'];
    $author = $book == FALSE ? NULL : $book['author'];
    $publish_date = $book == FALSE ? NULL : date('Y-m-d',$book['publish_date']);
    $body = $book == FALSE ? NULL : $book['body'];
    $book_id = $book == FALSE ? NULL : $book['id'];
    $op = $book == FALSE ? 'create' : 'update';
?>