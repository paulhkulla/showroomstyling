<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Aperture
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/safari-pinned-tab.svg" color="#2d2926">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicons/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <div class="wrapper">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aperture' ); ?></a>

        <div id="hidden-header" class="hidden">
            <nav id="mobile-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Mobile Navigation', 'aperture' ); ?>">
                <div class="menu-title"><h1><?php _e( 'Menu', 'aperture' ); ?></h1></div>
                <?php if ( has_nav_menu( 'primary' ) ) { get_template_part( 'template-parts/navigation-primary' ); } ?>
                <?php if ( has_nav_menu( 'secondary' ) ) { get_template_part( 'template-parts/navigation-secondary' ); } ?>

                <div id="mobile-search" class="search-container">
                    <?php get_search_form(); ?>
                </div><!-- #mobile-search -->
            </nav><!-- #site-navigation -->

            <div id="desktop-search" class="search-container">
                <?php get_search_form(); ?>
            </div><!-- #desktop-search -->
        </div><!-- #hidden-header -->

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="showroom-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/logo_black_text_simple.svg' ?>" alt="Showroom"></a></h1>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            </div><!-- .site-branding -->

            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="primary-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Menu', 'aperture' ); ?>">
                    <?php if ( has_nav_menu( 'primary' ) ) { get_template_part( 'template-parts/navigation-primary' ); } ?>
                </nav><!-- #primary-navigation -->
            <?php endif; ?>

            <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'secondary' ) ) : ?>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'aperture' ); ?></span>
                    <span class="lines" aria-hidden="true"></span>
                </button>
            <?php endif; ?>

            <?php if ( has_nav_menu( 'social' ) || has_nav_menu( 'secondary' ) ) : ?>
                <div class="right-container">
                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                        <nav id="top-social" class="social-links" aria-label="<?php _e( 'Social Links', 'aperture' ); ?>">
                            <?php get_template_part( 'template-parts/navigation-social' ); ?>
                            <span class="sep"> | </span>
                            <button class="search-toggle">
                                <span class="screen-reader-text"><?php _e('Search Toggle', 'aperture'); ?></span>
                                <span class="genericon genericon-search" aria-hidden="true"></span>
                            </button>
                            <?php if ( has_nav_menu( 'social' ) && has_nav_menu( 'secondary' ) ) : ?>
                                <span class="sep"> | </span>
                            <?php endif; ?>
                        </nav><!-- #social-links -->
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'secondary' ) ) : ?>
                        <nav id="secondary-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Secondary Menu', 'aperture' ); ?>">
                            <?php if ( has_nav_menu( 'secondary' ) ) { get_template_part( 'template-parts/navigation-secondary' ); } ?>
                        </nav><!-- #secondary-navigation -->
                    <?php endif; ?>
                </div><!--.right-container -->
            <?php endif; ?>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
