<?php get_header(); ?>
<div class="wrapper">
  <div class="content">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div class='single' id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class='post-top'>
          <div class='single-meta'>
              <p class='single-cat_list'> <?php echo get_the_category_list(); ?> </p>
              <h1 class='single-entry-title'><?php the_title(); ?></h1>
              <p class='single-author'>By <?php the_author(); ?></p>
          </div><!-- .entry-meta -->

          <div class='single-post_thumbnail'>
              <?php the_post_thumbnail('large'); ?>
          </div>
      </div>
       
        <div class='single-entry-content'>
          <?php the_content(); ?>
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .entry-content -->

      </div><!-- #post-## -->

    <?php endwhile; // end of the loop. ?>

  </div> <!-- /.content -->

</div>

<?php get_footer(); ?>