<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="post-thumbnail home-page-thumb">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large'); ?>
			</a>
		</div>
	<?php endif; ?>


	<header class="post-header">
		<div class="post-meta">
			<?php the_category(', ') ?>
		</div><!-- .entry-meta -->
		<?php if ( is_single() ) : ?>
		<h3 class="entry-title"><?php the_title(); ?></h3>
		<?php else : ?>
	
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		
		
	</header><!-- .entry-header -->
    		
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="post-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="post-content">
	    <?php if ( get_theme_mod( 'mashthirteen_blogfeed_excerpts' ) != 1 ) { ?>
		    <?php if ( get_post_gallery() ) : ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'mashthirteen' ) ); ?>
			<?php else : ?>
			<?php the_excerpt(); ?>
			<?php endif; ?>
	    <?php } else { ?>
	        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'mashthirteen' ) ); ?>
		<?php } ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mashthirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'mashthirteen' ) . '</span>', __( 'One comment so far', 'mashthirteen' ), __( 'View all % comments', 'mashthirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
