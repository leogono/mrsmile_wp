<?php
/**
 * @package Mr Smile Theme
 */
?>

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
</article><!-- #post-## -->
