<?php 

    get_header();
    dynamic_sidebar(); 



    
    /* Challenge #2
    Create a function called wrapText
    Where the function takes two parameters
    Tag
    Content
    Have the function return the tag wrapped around the content.
    */
    
    function wrap_text( $tag, $content ) {

        return "<$tag>$content</$tag>";

    }

    echo wrap_text("h1", "Hello World" );



    get_footer();
    
?>