<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'custom-footer-widget' ) ) : ?>
		    <div id="footer-widget-area" class="chw-widget-area widget-area fw-container" role="complementary">
		<?php dynamic_sidebar( 'custom-footer-widget' ); ?>
		    </div>
		<?php endif; ?>
		<div class="site-info">
			<span class="sep"> © 2008-2017 Kotris LTD</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
