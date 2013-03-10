<?php

require_once __DIR__ . '/inc/Theme.php';
require_once __DIR__ . '/inc/Enqueue.php';
require_once __DIR__ . '/inc/Head.php';
require_once __DIR__ . '/inc/Sidebar.php';

\YourNamespace\Theme\Enqueue::init();
\YourNamespace\Theme\Head::init();
\YourNamespace\Theme\Sidebar::init();

// do your things here.
