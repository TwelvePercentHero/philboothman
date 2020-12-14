<?php get_header(); ?>

<div class="page">

<h2><?php the_title(); ?></h2>

<hr>

<?php
    wp_reset_query();
    while(have_posts()) : the_post();
        the_content();
    endwhile;
?>

</div>


<?php get_footer(); ?>