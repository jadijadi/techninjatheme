<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
			<div class="site-info">
				<p>Proudly powered by<a href="http://wordpress.org/" title="Semantic Personal Publishing Platform">WordPress</a></p>
	    	</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>	
	<script type="text/javascript">
	<?php echo of_get_option('analytics_textarea'); ?>
</script>	
</body>
</html>