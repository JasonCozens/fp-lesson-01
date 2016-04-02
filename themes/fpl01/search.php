<?php
/*
Template Name: Search Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 1</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<body>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
    foreach($query_args as $key => $string) {
        $query_split = explode("=", $string);
        $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach
} //if

$search = new WP_Query($search_query);
?>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<div class="content-row hentry">
    <?php get_search_form(true); ?>
    <h1>Search Results: <?php the_search_query(); ?></h1>
    <p> <?php echo $wp_query->found_posts; ?> </p>
    <?php

    // The Query
    $the_query = $search;

    // The Loop
    if ( $the_query->have_posts() ) {
         while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<p>' . the_content() . '</p>';
        }
    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
<?php wp_footer(); ?>
</body>
</html>
