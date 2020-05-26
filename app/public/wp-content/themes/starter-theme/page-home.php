<!-- 
   Template Name: Home
 -->
 <?php get_header(); ?>

<!-- // Hero Section -->

<?php if( have_posts()) while(have_posts()) : the_post(); ?>
   <section class="home-hero">
      <div class='home-hero_content'>
            <h1><?php the_title(); ?></h1>
            <p><?php the_field('home_hero_text');  ?></p>
            <?php $hero_link = get_field('home_hero_link'); 
            ?>
            <a href="<?php echo $hero_link['url']; ?>" target="<?php echo $hero_link['target'] ?>"><?php echo $hero_link['title']; ?></a>
      </div>
      <div class='home-hero_image'>
          <?php echo wp_get_attachment_image(
              get_post_thumbnail_id(),
              'large',
              false,
              array('class' =>'featured-image')
          ) ?>
      </div>
   </section>

<!-- // About Us Section -->

   <section class="about-us">
      <div class='home-about-us_content'>
          <?php if(get_field('about_header')): ?>
          <h1><?php the_field('about_header'); ?></h1>
          <?php endif; ?>

          <?php if(get_field('about_text')):
          the_field('about_text');
          endif;?>

          <?php $about_link = get_field('about_link'); ?>

          <?php if($about_link): ?>
          <a href="<?php echo $about_link['url'] ?>" target="<?php echo $about_link['target'] ?>"><?php echo $about_link['title']; ?></a>
          <?php endif; ?>
      </div>
      <div class='home-about-us_image'>
          <?php $about_image = get_field('about_image');
          echo wp_get_attachment_image(
          $about_image,
          'large'
          );
          ?>
      </div>
   </section>

   <!-- Featured Employee section -->

   <section class="featured-employee">
        <?php $employee = get_field('featured_employee'); ?>
        <div class='images-text_image'>
            <?php echo wp_get_attachment_image(
                get_post_thumbnail_id($employee->ID),
                'large'
            );?>
        </div>
       
        <div class='images-text_content'>
            <?php if($employee->post_title): ?>
            <h2><?php the_field('featured_employee_title'); ?></h2>
            <h1><?php echo $employee->post_title; ?></h1>
            <?php endif; ?>
            <p><?php echo wp_trim_words($employee->bio, 50); ?></p>
        </div>  
       
   </section>

<?php endwhile; ?>
<?php get_footer(); ?>
