<?php
/**
 * Taxonomy template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

$term = get_queried_object();

$template = empty($term->taxonomy) ? 'taxonomy' : $term->taxonomy;

get_header($template);

get_template_part('parts/loop', 'taxonomy');

get_footer($template);
