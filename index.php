<?php get_header(); ?>

<h2>Blog</h2>

<hr>


    <?php while(have_posts()) {
        the_post();
    ?>

    <div class="post">

        <a href="<?php the_permalink(); ?>">
            <h4><?php the_title(); ?></h4>
        </a>
        <span class="datetime"><?php the_time('F j Y') ?></span>
        <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>

        <hr>

    </div>

<?php } wp_reset_query(); ?>


<?php get_footer(); ?>