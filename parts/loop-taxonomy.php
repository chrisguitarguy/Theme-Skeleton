<?php
/**
 * Loop for taxonomy (category, tag, custom taxonomy) templates.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop loop-archive">

    <h1 class="loop-title"><?php single_term_title(); ?></h1>

    <?php if ($desc = term_description()): ?>
        <div class="archive-description entry">
            <?php echo $desc; /* You may want to escape this... */ ?>
        </div>
    <?php endif; ?>

    <?php while (have_posts()): the_post(); ?>
        <article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('parts/content-archive', get_post_type()); ?>
        </article>
    <?php endwhile; ?>

    <?php get_template_part('parts/pagination', 'taxonomy'); ?>

</div>
