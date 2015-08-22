<?php
/**
 * The template for displaying the footer.
 */

?>
    </div>    
    
    <footer> 
      <div class="footer-container">
        <div class="footer--image">
           <a href="https://www.tumblr.com/blog/davidsdna"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tumblr.png"></a>
        </div>
        <div class="footer--image">
           <a href="https://github.com/david-at-ocs"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/github.png"></a>
        </div>
        <div class="footer--image">
           <a href="https://www.facebook.com/david.gardetti"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png"></a>
        </div>
        <div class="footer--image">
           <a href="https://www.linkedin.com/in/davidgardetti"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png"></a>
        </div>
      </div>
      <div style="clear: both"></div>
      <div class="dg_logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dg-logo.png">
        </a>
      </div>
    </footer>

  <?php wp_footer(); ?>
  <script style="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/global.js"></script>
</body>
</html>
