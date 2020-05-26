<?php //index.php is the last resort template, if no other templates match ?>
<link href="https://fonts.googleapis.com/css2?family=Barlow&family=Playfair+Display+SC:wght@900&display=swap" rel="stylesheet"><?php get_header(); ?>

<div class="wrapper">

  <div class="blog">
    <form class='categories' action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <?php wp_dropdown_categories(); ?>
        <input class='category_btn'type="submit" name="submit" value="Go!" />
    </form>
    <?php get_template_part( 'loop', 'index' );	?>
  </div> <!--/.content -->

</div> 

<?php get_footer(); ?>