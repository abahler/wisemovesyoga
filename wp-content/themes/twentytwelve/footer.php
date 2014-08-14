<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer style="border:1px solid #000;" id="colophon" role="contentinfo">
		<!-- <div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div> -->
		<a href="http://www.wisemovesyoga.com/"><img id="footer_logo" src="/wp-content/themes/twentytwelve/images/footer_logo.jpg" /></a>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="contact_info">
		847-566-4717 | <a href="mailto:allison@wisemovesyoga.com">allison@wisemovesyoga.com</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<p id="credit" style="text-align:center;">Site designed by <a href="http://nicklarsenmedia.com/" target="_blank">Nick Larsen Media</a></p>
<?php wp_footer(); ?>
</body>
</html>