<?php
/**
 * Single page template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('page');

get_template_part('parts/loop', 'single');

get_footer('page');
