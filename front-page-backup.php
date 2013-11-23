<?php
/**
 * The template for displaying Front pages.
 *
 *
 * @package Mr Smile Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<header class="page-header">
				<h1 class="page-title">Latest Blog Posts</h1>
			</header>

			<?php
			// The Query
			query_posts( 'posts_per_page=5' );

			// The Loop
			while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					</header>
					<div class="entry-meta">
						<?php mrsmile_wp_posted_on(); ?>
					</div>
					<div class="entry-content">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  							the_post_thumbnail('thumbnail', array(
  								'class' => 'alignleft'
  								));
						} ?>
						<?php the_excerpt(); ?>
					</div>
					
				</article>
			    
			<?php endwhile;
			// Reset Query
			wp_reset_query();
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
