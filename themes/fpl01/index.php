<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 1</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    <div class="content-row">
        <h1>Introduction</h1>
        <p>This course will teach you FoundationPress in great detail.</p>
    </div>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
</body>
</html>

