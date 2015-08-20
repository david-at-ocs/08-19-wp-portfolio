<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header( 'other' ); ?>
      <section class="square one">
        <!-- <img src="img/shotglasses.png" alt="Shot glasses, black and white"> -->
        <div class="overlay">
          <div class="post_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/eschelon_screen_shot.png">
          </div>
          <div class="post_links">
            <h1>Web work</h1>
            <p>Eschelon</p>
            <p><a href="#">http://www.example.com</a></p>
            <p><a href="#">http://www.github.com</a></p>
          </div>
        <div style="clear: both"></div>
        </div>
      </section>
<?php get_footer(); ?>
