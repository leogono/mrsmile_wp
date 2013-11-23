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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
			<div id="footer-widgets" class="clearfix">
				<div id="footer-left">
					<?php if ( ! dynamic_sidebar( 'footer-1' ) ) ; ?>
					<div class="site-info">
						<p><a href="<?php bloginfo( 'url' ); ?>">MrSmile.com</a> <?php echo date('Y'); ?> All rights reserved.</p>
						<p>web design &amp; development by <a href="http://wpmeds.com" class="wpmeds" target="_blank">wpmeds</a></p>
					</div><!-- .site-info -->
				</div>
				<div id="footer-right">
					<?php if ( ! dynamic_sidebar( 'footer-2' ) ) ; ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>