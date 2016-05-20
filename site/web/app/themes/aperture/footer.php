<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Aperture
 */
?>

	</div><!-- #content -->

        <div class="push"></div>

        </div><!-- #wrapper -->

        <footer id="colophon" class="site-footer" role="contentinfo">

            <div class="container">

                <?php get_sidebar( 'bottom' ); ?>

                <div class="site-info">

                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                        <nav id="bottom-social" class="social-links">
                            <?php get_template_part( 'template-parts/navigation-social' ); ?>
                        </nav><!-- #social-links -->
                    <?php endif; ?>

                    <div class="credits">
                        <span class="credits-top"><b>SHOW</b>ROOM &copy; <?php echo date('Y'); ?></span>
                        <span class="sep"> | </span>
                        <span class="credits-bottom">E-mail: <a href="mailto:info@excellentgroup.ee">info@excellentgroup.ee</a></span>
                    </div><!-- .credits -->

                    <div class="custom-text">
                        <span>Helistage meile: <b>+372 5384 5415</b></span>
                    </div><!-- .custom-text -->

                </div><!-- .site-info -->

            </div><!-- .container -->

            <a href="#content" class="back-to-top"><span class="genericon genericon-top"></span></a>
        </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
