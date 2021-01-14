<?php get_header(); ?>

<header>

    <?php query_posts('posts_per_page=1'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="image-container">
                <div class="aspect-ratio">
                    <div class="aspect-ratio-inside">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php echo the_post_thumbnail(); ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" featured-text">
                <p>Latest</p>
                <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="read-more"><a href="<?php echo get_permalink(); ?>">Read More ></a></p>
            </div>

    <?php endwhile;
    endif; ?>
</header>

<section class="learn">
    <h1>Learn About Coffee Culture</h1>
    <div class="card-container">
        <div class="card">
            <a href="#">
                <div class="aspect-ratio">
                    <div class="aspect-ratio-inside">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class=" text">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                    <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </p>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#">
                <div class="aspect-ratio">
                    <div class="aspect-ratio-inside">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class=" text">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                    <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </p>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="#">
                <div class="aspect-ratio">
                    <div class="aspect-ratio-inside">
                        <?php echo the_post_thumbnail(); ?>
                    </div>
                </div>
                <div class=" text">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                    <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat... </p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="articles">
    <h1>Latest Articles</h1>

    <div class="article-container">

        <?php query_posts('posts_per_page=6'); ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="article">
                    <div class="image-container">
                        <div class="aspect-ratio">
                            <div class="aspect-ratio-inside">
                                <div class="article-image">
                                    <a href="<?php echo get_permalink(); ?>"><?php if (has_post_thumbnail()) : echo the_post_thumbnail();
                                                                                endif; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" text">
                        <a href="<?php echo get_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                        </a>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </div>

                <hr>

        <?php endwhile;
        endif; ?>

    </div>

    <div class="btn"><button>More of Newest</button></div>

</section>

<section class="instagram">
    <h1>Instagram</h1>

    <?php
    $args = array(
        'post_type' => 'page',
        'title' => 'Instagram'
    );

    $your_query = new WP_Query($args);
    while ($your_query->have_posts()) : $your_query->the_post();
        the_content();
    endwhile;
    ?>
</section>

<?php get_footer(); ?>