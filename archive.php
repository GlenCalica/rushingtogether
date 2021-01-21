<?php

/**
 * Template Name: Archive Page
 *
 */
?>

<?php get_header(); ?>

<section class="articles archive">
    <h1>Articles</h1>

    <div class="article-container">
        <?php

        // $args = array(
        //     'posts_per_page' => 6,
        //     'post_type'      => 'post',
        // );

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args['paged'] = $paged;
        query_posts($args);

        $wp_query = new WP_Query($args)
        ?>

        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="article">
                    <div class="image-container">
                        <div class="aspect-ratio">
                            <div class="aspect-ratio-inside">
                                <div class="article-image">
                                    <a href="<?php echo get_permalink(); ?>"><?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('small'); ?>">
                                        <?php endif; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" text">
                        <a href="<?php echo get_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                        <div class="excerpt">
                            <p class="excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        </div>
                    </div>
                </div>

                <hr>

            <?php endwhile; ?>
    </div>
    <p><?php echo paginate_links(); ?></p>

<?php endif;
        wp_reset_query(); ?>


</section>

<?php get_footer(); ?>