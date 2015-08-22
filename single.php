<?php
/**
 * The template for displaying all single posts.
 */

get_header( 'other' ); ?>
<?php $upload_dir = wp_upload_dir(); ?>

      <section class="square one">
        <!-- <img src="img/shotglasses.png" alt="Shot glasses, black and white"> -->
        <div class="overlay">
          <div class="post_img">
            <img src="<?php echo $upload_dir['baseurl']; ?>/2015/08/eschelon_screen_shot.png">
          </div>
          <div class="post_links">
          	<?php while ( have_posts() ) : the_post(); ?>
              <h1><?php echo get_post_field( 'post_title' ); ?></h1>
              <p><?php echo get_post_field( 'post_content' ); ?></p>
              <!-- <p><a href="#">http://www.example.com</a></p>
              <p><a href="#">http://www.github.com</a></p> -->                     

          		<?php the_post_navigation(); ?>

          	<?php endwhile; // End of the loop. ?>
            
          </div>
          <div style="clear: both"></div>
        </div>
      </section>


<?php get_footer(); ?>
