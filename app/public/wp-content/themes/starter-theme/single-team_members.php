<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php $job_title = get_field('job_title'); ?>
    <?php $pizza = get_field('favourite_pizza_topping'); ?>
    <?php $band = get_field('favourite_band'); ?>
    <?php $project  = get_field('favourite_project'); ?>
    <?php $bio = get_field('bio'); ?>

<div class='team-member'>
    <div class='team-member__about'>
        <div class='team-member__stats'>
        <h1><?php the_title(); ?></h1>
            <h1 class='team-member__job-title'><?php echo $job_title; ?></h1>
            <p>Additional Information:</p>
            <p>Favourite Pizza Topping: <?php echo $pizza; ?></p>
            <p>Favourite Band: <?php echo $band ;?></p>
            <a href=<?php echo $project['title'];?>>Favourite Project: <?php echo $project['title']; ?> </a>
        </div>
        <div class='team-member__img'>
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div>
    <div class='team-member__bio'>
        <p><?php echo $bio?></p>
    </div>
</div>
   
<?php endwhile; ?>

<?php get_footer(); ?>