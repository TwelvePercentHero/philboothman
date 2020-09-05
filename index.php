<?php get_header(); ?>

<?php while(have_posts()) {
    the_post();
?>

<?php the_title(); ?>

<?php } wp_reset_query(); ?>


<?php get_footer(); ?>