<?php
/**
 * Archive page content.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<h2 class="archive-title <?php echo get_post_type(); ?>-title">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
    </a>
</h2>

<div class="entry archive-entry">
    <?php the_excerpt(); ?>
</div>
