<?php
/**
 * The template for displaying all single posts.
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
            
          	<?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part('template-parts/content'); ?>

          		<?php the_post_navigation(); ?>

          	<?php endwhile; // End of the loop. ?>
            
          </div>
          <div style="clear: both"></div>
        </div>
      </section>


<?php get_footer(); ?>
