<?php
/**
 * Loop for "archive" (fallback) pages.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop loop-archive">

    <h1 class="loop-title"><?php
        the_post();
        echo esc_html(get_the_author());
        rewind_posts(); // since we called `the_post` above
    ?></h1>

    <?php while (have_posts()): the_post(); ?>
        <article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('parts/content-archive', get_post_type()); ?>
        </article>
    <?php endwhile; ?>

    <?php get_template_part('parts/pagination', 'author'); ?>

</div>
