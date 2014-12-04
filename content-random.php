<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */

 ?>

<?php 
if(get_query_var('cat') !='')
	$posts = get_posts('cat='.get_query_var('cat').'&orderby=rand&numberposts=10'); 
else
	$posts = get_posts('orderby=rand&numberposts=10'); 

foreach($posts as $post) { ?>
<article <?php post_class(); ?>>
<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium'); ?>
			</a>
		</div>
	<?php endif; ?>
	<header class="post-header">
		<div class="post-meta">
			<?php the_category(', ') ?>
		</div><!-- .entry-meta -->	
		<h3 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
	</header><!-- .entry-header -->
</article><!-- #post -->
<?php } ?>