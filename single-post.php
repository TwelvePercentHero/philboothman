<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

<?php the_time('F j Y') ?>

<?php
    wp_reset_query();
    while(have_posts()) : the_post();
        the_content();
    endwhile;
?>


<?php get_footer(); ?>