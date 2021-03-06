<?php
/**
 * Loop for the date pages.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
<div class="loop loop-archive">

    <h1 class="loop-title"><?php if (is_day()) {
        printf(
            __('Daily Archives: %s', 'your_textdomain'),
            esc_html(get_the_date())
        );
    } elseif (is_month()) {
        printf(
            __('Monthly Archives: %s', 'your_textdomain'),
            esc_html(get_the_date(_x('F Y', 'theme archives', 'your_textdomain')))
        );
    } else {
        printf(
            __('Yearly Archives: %s', 'your_textdomain'),
            esc_html(get_the_date(_x('Y', 'theme archives', 'your_textdomain')))
        ); 
    } ?></h1>

    <?php while (have_posts()): the_post(); ?>
        <article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('parts/content-archive', get_post_type()); ?>
        </article>
    <?php endwhile; ?>

    <?php get_template_part('parts/pagination', 'date'); ?>

</div>
