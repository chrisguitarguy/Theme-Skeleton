<?php
/**
 * Category template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('category');

get_template_part('parts/loop', 'taxonomy');

get_sidebar('category');

get_footer('category');
