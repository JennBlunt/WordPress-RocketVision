<!-- 
   Template Name: Services
 -->
 <?php get_header(); ?>

    <div class='rockets-img'>
        <?php echo wp_get_attachment_image(
            get_post_thumbnail_id(),
            'large',
            false,
            array('class' =>'featured-image')
        ) ?>
    </div>
      
   <?php if( have_posts()) while(have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>

      <?php if(have_rows('services')): ?>
         <ul class='services'>
         <?php while(have_rows('services')): the_row(); ?>
            <li>
               <h2 class='service-title title-selected'><?php the_sub_field('service_title'); ?></h2>
               <p class='service-description description-hide'><?php the_sub_field('service_description'); ?></p>
            </li>
         <?php endwhile; ?>
         </ul>
      <?php endif; ?>

   <?php endwhile; ?>
 <?php get_footer(); ?>