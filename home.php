<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */
get_header(); ?>	
	<div id="primary" class="col-md-9">
		<div  class="col-md-8 entrypart" role="main">
		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'home' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
<?php twentythirteen_paging_nav(); ?>
		</div><!-- #content -->	
		<div  class="col-md-4 randomposts" >
			<h2>پست اتفاقی</h2>		
		<?php get_template_part( 'content', 'random' ); ?>
		</div>
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
