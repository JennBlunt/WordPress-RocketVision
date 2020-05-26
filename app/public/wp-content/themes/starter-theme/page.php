<?php get_header();  ?>

<div class='rockets-img'>
    <?php echo wp_get_attachment_image(
        get_post_thumbnail_id(),
        'large',
        false,
        array('class' =>'featured-image')
    ) ?>
</div>

<div class="wrapper">

  <div class="content">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /,content -->

</div>

<?php get_footer(); ?>