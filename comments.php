<?php
/**
 * Comments template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

if (post_password_required()) {
    return;
}

?>
<div id="comments-<?php the_ID(); ?>" class="comments">
    <?php if (have_comments()): ?>
        <h2 class="comments-title"><?php _e('Comments', 'your_textdomain'); ?></h3>

        <ul class="comments-list">
            <?php wp_list_comments(array(
                'style'     => 'ul',
                //'callback'  => 'your_callback_here',
            )); ?>
            <?php endif; ?>

    <?php comment_form(array(
        'comment_notes_before'  => '',
        'comment_notes_after'   => '',
        // more args here
    )); ?>
</div>
