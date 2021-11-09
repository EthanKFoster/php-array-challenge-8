<?php 

get_header();
dynamic_sidebar(); 


echo "<pre>";

    function wrapText( $content, $tag = 'p' ) {

        echo "<{$tag}>{$content}</{$tag}>";

    }

    $tasks = array(

        array(
            'assigned'      => 'John Doe',
            'title'         => 'Title 1',
            'description'   => 'Description 1',
        ),

        array(
            'assigned'      => 'John Doe',
            'title'         => 'Title 2',
            'description'   => 'Description 2',
        ),
        
        array(
            'assigned'      => 'Miles',
            'title'         => 'Title 3',
            'description'   => 'Description 3',
        ),
        
    );

    // challenge 2
    foreach ( $tasks as $task ) {
        
        foreach ( $task as $key => $value ) {

            echo "{$key}: {$value} <br>";

        }

    }

    // challenge 3
    foreach ( $tasks as $task ) {

        if ( $task['assigned'] === 'John Doe' ) {
            
            wrapText( $task['title'], 'h2' );

        }

    }


    // Challenge 4 & 5

    if ( isset ( $_GET['assigned'] ) ) {

        $assigned = $_GET['assigned'];

        wrapText( "{$assigned} tasks are: ", 'h1');

        foreach ( $tasks as $task ) {

            if ( $task['assigned'] === $assigned ) {

                wrapText( $task['title'], 'h2' );

                wrapText( $task['description'] );

            }

        }

    }

echo "</pre>";

get_footer();