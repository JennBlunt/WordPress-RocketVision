</main>
<footer>
  
      <a  class='logo' href="<?php echo site_url(); ?>">
        <?php the_field('logo', 'options'); ?> 
      </a>
      <div class='social-menu'> 
        <p>
          <?php the_field('follow_text', 'options');?>
        </p> 
        <?php wp_nav_menu( array( 'theme_location' => 'social')); ?>
        <!-- add class to this array -->
      </div>
      
      
</footer>

<?php wp_footer(); ?>
</body>
</html>