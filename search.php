<?php get_header(); ?>

<section class="single">
    <h1>
        <?php
        printf(
            esc_html__('Results for "%s"'),
            '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
        );
        ?>
    </h1>

    <?php get_search_form(); ?>

    <p>Not finding what you're looking for? Try searching through our tags</p>

    <?php

    // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // $args['paged'] = $paged;
    // query_posts($args);

    query_posts('posts_per_page=10');

    ?>



    <?php if (have_posts()) { ?>

        <div class="result-container">

            <?php while (have_posts()) {
                the_post();
            ?>
                <div class="result">
                    <div class="image-container">
                        <div class="aspect-ratio">
                            <div class="aspect-ratio-inside">
                                <a href="<?php echo get_permalink(); ?>"><?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('small'); ?>">
                                    <?php endif; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <a href="<?php echo get_permalink(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>

                        <a href="<?php echo get_permalink(); ?>">
                            <p class="excerpt"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                        </a>

                    </div>

                </div>
                <hr>
            <?php

            } ?>
            <p><?php /* echo paginate_links(); */ ?></p>

            <?php wp_reset_query();  ?>
        <?php } else { ?>
            <div class="no-results">
                <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
            </div>
        </div>
    <?php } ?>

    </div>
</section>

<?php get_footer(); ?>