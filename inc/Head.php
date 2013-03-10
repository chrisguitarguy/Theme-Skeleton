<?php
/**
 * Put some items into `wp_head`
 *
 * @category    WordPress
 */

namespace YourNamespace\Theme;

!defined('ABSPATH') && exit;

class Head extends Theme
{
    public function _setup()
    {
        add_action('wp_head', array($this, 'viewport'), -1000);
        add_action('wp_head', array($this, 'title'), -999);
    }

    public function viewport()
    {
        echo '<meta name="viewport" content="width=device-width" />', "\n";
    }

    public function title()
    {
        // let SEO plugins deal with the title
        echo '<title>', wp_title('', false), '</title>', "\n";
    }
}
