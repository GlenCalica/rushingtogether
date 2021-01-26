<?php
/*
YARPP Template: Related Posts
Description: For rushingtogether
Author: Glen Calica
*/ ?>
<section class="articles">
    <h1>Related Articles</h1>

    <div class="article-container">

        <hr>

        <?php query_posts('posts_per_page=3'); ?>

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

        <?php
            endwhile;
        endif; ?>

    </div>
</section>