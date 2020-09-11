<?php get_header(); ?>

<h2>Latest</h2>

<hr>

    <?php 

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 5,
    );

    $blogposts = new WP_Query($args);

    while($blogposts->have_posts()) {
        $blogposts->the_post();

    ?>

<div class="post">

<a href="<?php the_permalink(); ?>">
    <h4><?php the_title(); ?></h4>
</a>
<span class="datetime"><?php the_time('F j Y') ?></span>
<?php the_content(); ?>

<hr>

</div>

<?php } wp_reset_query(); ?>


<?php get_footer(); ?>