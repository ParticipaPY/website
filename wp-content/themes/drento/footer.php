<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drento
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer smallPart" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'drento' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'drento' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'drento' ), 'Drento Free', '<a target="_blank" href="http://crestaproject.com/" rel="designer" title="CrestaProject">CrestaProject</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#top" id="toTop"><i class="fa fa-angle-up fa-3x"></i></a>
<?php wp_footer(); ?>

</body>
</html>
