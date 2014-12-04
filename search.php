<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="col-md-9">
		<div  class="col-md-8 entrypart" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Search Results for: %s', 'twentythirteen' ), get_search_query() ); ?></h1>
			</header>

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
			<h2>Random Posts</h2>		
		<?php get_template_part( 'content', 'random' ); ?>
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>