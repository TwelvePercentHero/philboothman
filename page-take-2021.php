<?php get_header(); ?>

<div class="page">

<h2><?php the_title(); ?></h2>

<hr>

<?php the_content(); ?>

<hr>

<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'take2021',
);

$arr_posts = new WP_Query($args);

if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
    ?>
    <div class="post">

<a href="<?php the_permalink(); ?>">
    <h4><?php the_title(); ?></h4>
</a>

<span class="datetime"><?php the_time('F j Y') ?> | <?php the_category(', '); ?></span>
<p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>

<hr>

</div>

<?php endwhile;

    endif;

    ?>

</div>


<?php get_footer(); ?>