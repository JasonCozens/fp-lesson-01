# FoundationPress Lesson 1

This is the start of a tutorial for FoundatiionPress and related
technolgies, including:

* git
* php
* html
* CSS
* javascript
* WordPress
* Foundation 6
* Sass
* npm

# Lesson Plan

1. Set Up Work Press
1. Bare Minimum
1. Add Page Content
1. Add Theme Screen Shot (screenshot.png)
1. Themes settings
1. Add Some Styles
1. get_head() and get_footer)

## screenshot.png

For the theme image to dispay it was nescessary to the following symbolic
link in /usar/share/wordpress/wp-content/themes:

* fplone -> /home/wp/WordpressDevelopment/fp-lesson-01/themes/fplone/

## Add Ssome Styles

* Add h1, p elements to index.php
* Style these with stylesheet.css

1. <?php bloginfo( 'stylesheet_url' ); ?>
  * Displays the primary CSS (usually style.css) file URL of the active theme. Consider echoing get_stylesheet_uri() instead.
  * <?php echo get_stylesheet_uri(); ?>
