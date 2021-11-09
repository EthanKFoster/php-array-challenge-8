<?php 

    get_header();
    dynamic_sidebar(); 


/* Challenge #1
Create a list called “tasks” where there are three posts.
Have the list have
Assigned
Two posts from the Assigned “John Doe”
One post from another Assigned author
Title
Task Description
Use a foreach loop, within a foreach loop to
Display the keys and item

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

    get_footer();
    
?>