<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<div class="col-md-9 singlepost">				
				
				<?php while ( have_posts() ) : the_post(); ?>			
					<?php get_template_part( 'content', get_post_format() ); ?>
			<div class="clear"></div>
			</div>
				<?php get_sidebar(); ?>			
				<?php twentythirteen_post_nav(); ?>
				
				<?php comments_template(); ?>

			<?php endwhile; ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>