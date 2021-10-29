<?php
/* Template Name: jeteste */

get_header(); ?>

<div style="font-size:10px;">


	test
    <?php
the_content(); ?>
	</div><!-- #primary -->

    <ul id="slider-id" class="slider-class">
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 1, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach( $recent_posts as $post_item ) : ?>
        <li>
            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                //Assuming that the slider support captions 
                <p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<ul id="" class="slider-class">
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 1, // Number of recent posts thumbnails to display
        'post_type' => 'page',
        'post_status' => 'publish' // Show only the published posts
    ));
    foreach( $recent_posts as $post_item ) : ?>
        <li>
            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                //Assuming that the slider support captions 
                <p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php get_footer(); ?>
