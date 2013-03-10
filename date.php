<?php
/**
 * Date archive.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('date');

get_template_part('parts/loop', 'date');

get_sidebar('date');

get_footer('date');
