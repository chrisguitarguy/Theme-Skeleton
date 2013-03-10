<?php
/**
 * Content area for a single post-type.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<h1 class="single-title <?php echo get_post_type(); ?>-title">
    <?php the_title(); ?>
</h1>

<div class="entry single-entry">
    <?php
    the_content();

    if (function_exists('wp_pagenavi')) {
        wp_pagenavi(array('type' => 'multipart'));
    } else {
        wp_link_pages();
    }
    ?>
</div>

<?php
if (post_type_supports(get_post_type(), 'comments') && comments_open()) {
    comments_template();
}
