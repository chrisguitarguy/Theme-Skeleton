<?php
/**
 * Tag template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('tag');

get_template_part('parts/loop', 'taxonomy');

get_footer('tag');
