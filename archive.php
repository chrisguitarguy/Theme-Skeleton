<?php
/**
 * Default (fallback) archive template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('archive');

get_template_part('parts/loop', 'archive');

get_sidebar('archive');

get_footer('archive');
