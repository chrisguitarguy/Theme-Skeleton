<?php
/**
 * Default footer.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

?>
        </div><?php /* div.inner-wrap, see header.php */ ?>
    </div><?php /* div.outer-wrap, see header.php */ ?>
</div><?php /* div#main, see header.php */ ?>

<footer id="footer">
    <div class="outer-wrap">
        <div class="inner-wrap">

            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
            </div>

            <?php /* other stuff here probably */ ?>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
