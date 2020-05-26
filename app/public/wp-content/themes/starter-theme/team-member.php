
<?php
$leadership_args = array(
    'post_type' => 'team_members',
    'posts_per_page' => '-1',
    'tax_query' => array(
        array(
            'taxonomy' => 'team',
            'field'    => 'slug',
            'terms'    => 'leadership'
        )
    )
); 

$development_args = array(
    'post_type' => 'team_members',
    'posts_per_page' => '-1',
    'tax_query' => array(
        array(
            'taxonomy' => 'team',
            'field'    => 'slug',
            'terms'    => 'development'
        )
    )
); 

$design_args = array(
    'post_type' => 'team_members',
    'posts_per_page' => '-1',
    'tax_query' => array(
        array(
            'taxonomy' => 'team',
            'field'    => 'slug',
            'terms'    => 'design'
        )
    )
); 

$leadership_query = new WP_Query( $leadership_args );
$development_query = new WP_Query( $development_args );
$design_query =new WP_Query( $design_args );



// LeadershipQuery


if ( $leadership_query->have_posts() ): ?>
    <div class='team leardership'>
        <h1>Our team</h1>
        <h3>Leadership</h3>
            <ul>
                <?php while ( $leadership_query->have_posts() ) : 
                    $leadership_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('square-large'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php if(get_field('job_title', get_the_id())): ?>
                        <p class='job-title' ><?php echo get_field('job_title', get_the_id()); ?></p>
                        <?php endif; ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php /* Restore original Post Data */
            wp_reset_postdata();
else : ?>
    <!-- no posts found -->
    <p>There are no posts</p>
    </div>
<?php endif; ?>

<!-- Development Query  -->

<?php 
if ( $development_query->have_posts() ): ?>
    <div class='dev'>
        <h3>Development Team</h3>
            <ul>
                <?php while ( $development_query->have_posts() ) : 
                    $development_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('square-large'); ?>
                        <h2><?php the_title(); ?></h2>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php /* Restore original Post Data */
            wp_reset_postdata();
else : ?>
        <!-- no posts found -->
    <p>There are no posts</p>
    </div>
<?php endif; ?>
       
<!-- // Design Query -->

<?php
if ( $design_query->have_posts() ): ?>
    <div class='design'>
        <h3>Design Team</h3>
            <ul>
                <?php while ( $design_query->have_posts() ) : 
                    $design_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('square-large'); ?>
                    <h2><?php the_title(); ?></h2>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        <?php /* Restore original Post Data */
        wp_reset_postdata();
else : ?>
    <!-- no posts found -->
    <p>There are no posts</p>
    </div>    
<?php endif; ?>
    

 