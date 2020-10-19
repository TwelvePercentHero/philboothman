<?php get_header(); ?>

<div class="blogpost">

<a href="<?php echo site_url('/blog') ?>">< Blog Index</a>

    <h2><?php the_title(); ?></h2>

    <span class="datetime"><?php the_time('F j Y') ?></span> | <?php the_category(', '); ?>

    <?php
        wp_reset_query();
        while(have_posts()) : the_post();
            the_content();
        endwhile;
    ?>

</div>


<?php get_footer(); ?>