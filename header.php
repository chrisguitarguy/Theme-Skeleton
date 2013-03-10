<?php
/**
 * Default header.
 *
 * @category    WordPress
 */

!defined('ABSPATH') && exit;

$tag = is_home() || is_front_page() ? 'h1' : 'h2';

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header">
    <div class="outer-wrap">
        <div class="inner-wrap">

            <div class="brand">
                <<?php echo $tag; ?> class="blogname">
                    <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
                </<?php echo $tag; ?>>

                <?php if ($desc = get_bloginfo('description', 'display')): ?>
                    <h3 class="description"><?php echo $desc; ?></h3>
                <?php endif; ?>
            </div>

            <?php /* other stuff here, probably */ ?>

        </div>
    </div>
</header>

<div id="main">
    <div class="outer-wrap">
        <div class="inner-wrap">
