<?php
/**
 * The template for displaying Author archive pages.
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

			<?php
				/* Queue the first post, that way we know
				 * what author we're dealing with (if that is the case).
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				the_post();
			?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'All posts by %s', 'twentythirteen' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header><!-- .archive-header -->

			<?php
				/* Since we called the_post() above, we need to
				 * rewind the loop back to the beginning that way
				 * we can run the loop properly, in full.
				 */
				rewind_posts();
			?>

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
			<h2>Random Posts on </h2>		
		<?php get_template_part( 'content', 'random' ); ?>
		</div>
	</div><!-- #primary -->
		

<?php get_sidebar(); ?>
<?php get_footer(); ?>