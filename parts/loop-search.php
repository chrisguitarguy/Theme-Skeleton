<?php
/**
 * Loop for search pages.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop loop-archive loop-search">

    <h1 class="loop-title"><?php
        printf(
            __('Search for &quot;%s&quot;', 'your_textdomain'),
            get_search_query()
        );
    ?></h1>

    <?php while (have_posts()): the_post(); ?>
        <article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('parts/content-archive', get_post_type()); ?>
        </article>
    <?php endwhile; ?>

    <?php get_template_part('parts/pagination', 'search'); ?>

</div>
