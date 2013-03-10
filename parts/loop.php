<?php
/**
 * Default "loop" template. Actually shows the posts.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop loop-archive">

    <?php while (have_posts()): the_post(); ?>
        <article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('parts/content-archive', get_post_type()); ?>
        </article>
    <?php endwhile; ?>

    <?php get_template_part('parts/pagination', 'index'); ?>

</div>
