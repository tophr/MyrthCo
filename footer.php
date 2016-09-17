<?php
/**
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php get_sidebar( 'footer' ); ?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a> | &copy;2000 &ndash; <?php echo date( 'Y' ); ?> <a href="http://tophermcculloch.com">Topher McCulloch</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<a href="http://www.youtube.com/watch?v=JKD2BxyriBM&feature=player_embedded" target="_blank">&pi;</a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer();
?>
</body>
</html>