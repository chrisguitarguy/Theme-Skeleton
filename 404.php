<?php
/**
 * Default (fallback) template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('error');

get_template_part('parts/loop', 'error');

get_footer('error');
