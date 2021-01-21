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

    <?php if (have_posts()) { ?>

        <p>
            <?php
            printf(
                esc_html(
                    /* translators: %d: the number of search results. */
                    _n(
                        'We found %d result for your search.',
                        'We found %d results for your search.',
                        (int) $wp_query->found_posts,
                    )
                ),
                (int) $wp_query->found_posts
            );
            ?>
        </p>
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

            }
        } else { ?>
            <div class="no-results">
                <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
            </div>
        </div>
    <?php } ?>

    </div>
</section>

<?php get_footer(); ?>