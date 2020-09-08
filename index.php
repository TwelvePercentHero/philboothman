<?php get_header(); ?>

<h2>Latest</h2>

<hr>


<div class="post-list">
    <?php while(have_posts()) {
        the_post();
    ?>

    <div class="post">

        <h4><?php the_title(); ?></h4>
        <?php the_content(); ?>

    </div>
</div>

<?php } wp_reset_query(); ?>


<?php get_footer(); ?>