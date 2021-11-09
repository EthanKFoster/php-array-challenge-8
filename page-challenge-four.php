<?php 

    get_header();
    dynamic_sidebar(); 

    /* Challenge #4
        Using a $_GET 
        Get a parameter from the url called assigned
    */

    // make nested arrays with assigned values for tasks and authors.
    $tasks = array();

    $tasks['John Doe'] = array(

        "Wash Car" => "Take the car to get detailed.",
        "Bills" => "Pay for your things."

    );

    $tasks['C3-P0'] = array(

        "Translate" => "Explain to your party what the Ewoks say."

    );


    // start nested foreach loops to echo values of both levels of arrays
    foreach ( $tasks as $assignees => $assigned ) {

        echo  "<h2> {$assignees} </h2>";

        foreach ( $assigned as $title => $description ) {

            echo "<p>{$title}: {$description}</p>";

        }
    }




    function wrap_text( $tag, $content ) {

        return "<$tag>$content</$tag>";

    }

    

    
    echo wrap_text( "h2", "Challenge 3");

    foreach ( $tasks['John Doe'] as $title => $description ) {

        $title_number = 1;

        echo wrap_text( "p", "John Doe's task title #$title_number: $title" );

        $title_number++;
    }



    // challenge 4

    echo wrap_text( "h2", "Challenge 4");

    echo $_GET['assigned'];

    // end challenge 4


    get_footer();
    
?>