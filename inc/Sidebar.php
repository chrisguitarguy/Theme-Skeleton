<?php
/**
 * Register and setup sidebars.
 *
 * @category    WordPress
 */

namespace YourNamespace\Theme;

class Sidebar extends Theme
{
    public function _setup()
    {
        add_action('widgets_init', array($this, 'sidebars'));
    }

    public function sidebars()
    {
        $args = array(
            'before_widget'     => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'      => '</aside>',
            'before_title'      => '<h4 class="widget-title">',
            'after_title'       => '</h4>',
        );

        $sidebars = array(
            'default-sidebar'   => __('Default Sidebar', 'your_textdomain'),
        );

        foreach ($sidebars as $id => $label) {
            register_sidebar(wp_parse_args(array(
                'id'    => $id,
                'name'  => $label,
            ), $args));
        }
    }

    // you can abstract away sidebars behind static methods here
    // that's nice when you have a lot logic relating to sidebars.
}
