<?php get_header(); ?>

<main>

<?php while(have_posts()) {
    the_post();
?>

<?php the_title(); ?>

<?php } wp_reset_query(); ?>

</main>


<?php get_footer(); ?>