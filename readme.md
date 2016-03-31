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
1. Add a menu
1. Add styles to menu items
  1. Simple Left Aligned Menu
  1. Simple Right Aligned Menu
  1. Simple Centered Menu
1. get_head() and get_footer)

## screenshot.png

For the theme image to dispay it was nescessary to the following symbolic
link in /usr/share/wordpress/wp-content/themes:

* fplone -> /home/wp/WordpressDevelopment/fp-lesson-01/themes/fplone/

## Add Some Styles

* Add h1, p elements to index.php
* Style these with stylesheet.css

1. <?php bloginfo( 'stylesheet_url' ); ?>
  * Displays the primary CSS (usually style.css) file URL of the active theme. Consider echoing get_stylesheet_uri() instead.
  * <?php echo get_stylesheet_uri(); ?>

## Add a Menu

The code added in this step adds an unordered list for the menu.

### Menu Class Names

When adding a menu the class names for the menu are generated from this name.

* Menu name: <name>
* Outer class
  * menu-<name>-container
* ul element
  * #menu-<name>
  * .menu
* li element
  * #menu-item-X
  * .menu-item
 
## CSS

How can the standard wordpress menu be styled so that it can have three regions:

* Left
* Center
* Right

These need to be configuarbale in the WordPress Theme Editor. 


In CSS3 it is not possible to use position selectors with classes, so:

```css
.right:last-child { . . . }
```

does not work. Using classes in these selectors is coming in CSS4.

