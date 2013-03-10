<?php
/**
 * Pagination for archives.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

global $wp_query;

if ($wp_query->max_num_pages < 2) {
    return; // no pages!
}

?>
<nav class="archive-pagination">
    <div class="pagination-pad">

        <?php if (function_exists('wp_pagenavi')): ?>

            <?php wp_pagenavi(); ?>

        <?php else: ?>

            <?php if (get_next_posts_link()): ?>
                <div class="nav-older">
                    <?php next_posts_link(__('&laquo; Older Posts', 'your_textdomain')); ?>
                </div>
            <?php endif; ?>

            <?php if (get_previous_posts_link()): ?>
                <div class="nav-newer">
                    <?php previous_posts_link(__('Newer Posts &raquo;', 'your_textdomain')); ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</nav>
