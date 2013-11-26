<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mr Smile Theme
 */
?>
		</div><!-- #main .wrap -->
	</div><!-- #main -->

	<footer id="colophon" class="site-footer wrap" role="contentinfo">
		<div class="wrap">
			<div class="site-info">
				<p><a href="<?php bloginfo( 'url' ); ?>">Mr.Smile</a> <?php echo date('Y'); ?> All rights reserved.</p>
				<p>web design &amp; development by <a href="http://wpmeds.com" class="wpmeds" target="_blank">wpmeds</a></p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>