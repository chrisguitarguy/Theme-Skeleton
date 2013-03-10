<?php
/**
 * Author template.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

get_header('author');

get_template_part('parts/loop', 'author');

get_footer('author');
