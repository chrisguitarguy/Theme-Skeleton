<?php
/**
 * Default (fallback) archive template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('search');

get_template_part('parts/loop', 'search');

get_sidebar('search');

get_footer('search');
