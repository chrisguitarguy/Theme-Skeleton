<?php
/**
 * Default (fallback) template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('index');

if (have_posts()) {
    get_template_part('parts/loop', 'index');
} else {
    get_template_part('parts/loop', 'error');
}

get_footer('index');
