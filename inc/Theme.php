<?php
/**
 * Theme base class.
 *
 * @category    WordPress
 */

namespace YourNamespace\Theme;

!defined('ABSPATH') && exit;

abstract class Theme
{
    // use this in script/style enqueues
    const VER = 1;

    private static $reg = array();

    public static function instance()
    {
        $cls = get_called_class();

        if (!isset(self::$reg[$cls])) {
            self::$reg[$cls] = new $cls;
        }

        return self::$reg[$cls];
    }

    public static function init()
    {
        add_action('after_setup_theme', array(static::instance(), '_setup'), 1);
    }

    abstract public function _setup();
}
