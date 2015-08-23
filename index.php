<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>



      <section class="square one">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shotglasses.png" alt="Shot glasses, black and white">
        <div class="overlay">
          <div class="button"><a href="<?php echo site_url(); ?>/about">about</a></div>
        </div>
      </section>
      
      <section class="square two">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cb-downtown.png" alt="Old building">
        <div class="overlay">
          <div class="button"><a href="<?php echo site_url(); ?>/contact">contact</a></div>
        </div>
      </section>
      <div style="clear: both"></div>
      
      <section class="square three">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cb.png" alt="Dilapitated building">
        <div class="overlay">
          <div class="button"><a href="<?php echo site_url(); ?>/web">web work</a></div>
        </div>
      </section>
      
      <section class="square four">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blurryOlivia.png" alt="Blurry girl in city">
        <div class="overlay">
          <div class="button"><a href="<?php echo site_url(); ?>/photography">photograhpy</a></div>
        </div>
      </section>
      <div style="clear: both"></div>

<?php get_footer(); ?>
