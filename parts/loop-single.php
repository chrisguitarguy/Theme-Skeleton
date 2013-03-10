<?php
/**
 * Default loop for single posts/pages.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop">

    <?php while (have_posts()): the_post(); ?>
        <article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('parts/content-single', get_post_type()); ?>
        </article>
    <?php endwhile; ?>

</div>
