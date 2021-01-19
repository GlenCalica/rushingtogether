<?php get_header(); ?>
<section class="single">

    <section class="blog-post">
        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <img class="post-thumbnail" src="<?php the_post_thumbnail_url('large'); ?>">
        <?php endif; ?>

        <?php the_content(); ?>
    </section>


</section>
<?php get_footer(); ?>