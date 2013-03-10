<?php
/**
 * Handle enqueing script/styles.
 *
 * @category    WordPress
 */

namespace YourNamespace\Theme;

!defined('ABSPATH') && exit;

class Enqueue extends Theme
{
    public function _setup()
    {
        add_action('wp_enqueue_scripts', array($this, 'scripts'));
        add_action('wp_enqueue_scripts', array($this, 'styles'));
        add_action('wp_head', array($this, 'shiv'), 99);
    }

    public function scripts()
    {
        wp_enqueue_script(
            'theme.main',
            get_template_directory_uri() . '/js/theme.js',
            array('jquery'),
            static::VER
        );
    }

    public function styles()
    {
        global $wp_styles;

        $dir = get_template_directory_uri();

        wp_enqueue_style(
            'main',
            $dir . '/style.css',
            array(),
            static::VER,
            'screen'
        );

        wp_enqueue_style(
            'main.ie7',
            $dir . '/css/ie7.css',
            array('main'),
            static::VER,
            'screen'
        );

        $wp_styles->add_data('main.ie7', 'conditional', 'lt IE 8');
    }

    public function shiv()
    {
        ?>
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
        <![endif]-->
        <?php
    }
}
