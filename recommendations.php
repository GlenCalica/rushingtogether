<?php

/**
 * Template Name: Recommendations Page
 *
 */
?>

<?php get_header(); ?>
<section class="articles archive">

    <h1><?php the_title(); ?></h1>

    <div class="content">
        <?php the_content(); ?>
    </div>

    <div class="article-container">
        <?php

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args['paged'] = $paged;
        $args['tag'] = 'recommendation';
        query_posts($args);

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
                            <h2><?php the_title(); ?></h2>
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