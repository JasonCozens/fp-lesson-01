<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FP Express</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body>
  <h1>FoundationPress Express</h1>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            ... Display post content
        <?php endwhile; ?>
    <?php endif; ?>
</body>
</html>
