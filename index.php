<?php

    $books = [
        [
            'title' => 'GOTLIB...',
            'author' => [
                'name' => 'Gotlib',
                'birth' => '1934',
                'deceased' => FALSE,
            ],
            'publication' => 1986,
            'available' => TRUE,
        ],
        [
            'title' => 'CINEMASTOCK. 1',
            'author' => [
                'name' => 'Gotlib',
                'birth' => '1934',
                'deceased' => FALSE,
            ],
            'publication' => 2001,
            'available' => FALSE,
        ],
        [
            'title' => 'GAI-LURON OU LA JOIE DE VIVRE',
            'author' => [
                'name' => 'Gotlib',
                'birth' => '1934',
                'deceased' => '2011',
            ],
            'publication' => 1984,
            'available' => TRUE,
        ],
    ];

    /* CODE D'AFFICHAGE
        Sert à l'affichage de la page HTML.
    */

    $maVariable = 'Paris';
    print '<section>';
    foreach ($books as $book) {

        $title_markup = show_title($book['title']);
        print $title_markup;
        foreach ($book['author'] as $key => $value) {
            print authorsDetails($key, $value);
        }
    }
    print '</section>';


    /* FONCTIONS
        Sert à simplifier notre code en l'automatisant.
    */

    
    function show_title($title) {
        $markup = '<h2>' . $title . '</h2>';
        return $markup;
    }

    function authorsDetails($key, $value) {

        if ($value != FALSE) {
            return ucfirst($key) . ' : ' . $value . '<hr />';
        }
    }
?>