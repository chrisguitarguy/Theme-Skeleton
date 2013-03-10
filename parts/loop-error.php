<?php
/**
 * Default "loop" template. Actually shows the posts.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop">
    <article id="error-content" class="post">
        <?php get_template_part('parts/content', 'error'); ?>
    </article>
</div>

