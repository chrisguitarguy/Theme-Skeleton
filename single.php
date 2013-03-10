<?php
/**
 * Single post-type template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('single');

get_template_part('parts/loop', 'single');

get_footer('single');
