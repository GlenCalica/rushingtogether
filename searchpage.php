<?php

/**
 * Template Name: Search Page
 */
?>


<?php
if (have_posts()) {
?>
    <header class="page-header alignwide">
        <h1 class="page-title">
            <?php
            printf(
                /* translators: %s: search term. */
                esc_html__('Results for "%s"', 'twentytwentyone'),
                '<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
            );
            ?>
        </h1>
    </header><!-- .page-header -->

    <div class="search-result-count default-max-width">
        <?php
        printf(
            esc_html(
                /* translators: %d: the number of search results. */
                _n(
                    'We found %d result for your search.',
                    'We found %d results for your search.',
                    (int) $wp_query->found_posts,
                    'twentytwentyone'
                )
            ),
            (int) $wp_query->found_posts
        );
        ?>
    </div><!-- .search-result-count -->
<?php
    // Start the Loop.
    while (have_posts()) {
        the_post();

        /*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
        get_template_part('template-parts/content/content-excerpt', get_post_format());
    } // End the loop.

    // Previous/next page navigation.
    twenty_twenty_one_the_posts_navigation();

    // If no content, include the "No posts found" template.
} else {
    get_template_part('template-parts/content/content-none');
}
?>


<?php get_header(); ?>
<section class="single">
    <h1>Search Posts</h1>

    <?php get_search_form();  ?>

    <?php
    $term = $_GET['s'];
    $expTerm = explode(" ", $term);

    $search = "(";
    foreach ($expTerm as $ek => $ev) {
        if ($ek == 0) {
            $search .= " post_title LIKE '%" . $ev . "%' ";
        } else {
            $search .= " OR post_title LIKE '%" . $ev . "%' ";
        }
    }
    $search .= ")";

    $query = $wpdb->get_results(" SELECT * FROM " . $wpdb->prefix . "posts WHERE post_status='publish' AND $search ");

    echo "<pre>";
    print_r($query);
    echo "</pre>";

    ?>

    <?php get_search_form(); ?>
</section>
<?php get_footer(); ?>