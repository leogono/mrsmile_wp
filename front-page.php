<?php
/**
 * The template for displaying Front pages.
 *
 *
 * @package Mr Smile Theme
 */

get_header(); ?>

	<div id="primary" class="front-page content-area">
		<div id="content" class="site-content" role="main">

		<?php if(get_field('home_box', 'option')): ?>
 
			<div class="row-box row">
		 
			<?php while(has_sub_field('home_box', 'option')): ?>
		 
				<div class="box-col <?php the_sub_field('box_width'); ?>">
					<?php if(get_sub_field('content_box') == '1') {
						?>
						<div class="content-box">
							<div class="inside-content">
								<?php the_sub_field('content'); ?>
							</div>
							<div class="image-bg">
								<?php
								//Variables
								$attachment_id = get_sub_field('box_image');
								if(get_sub_field('box_width') == 'col-lg-8') {
									$size = "home-box2";
								}
								elseif(get_sub_field('box_width') == 'col-lg-4') {
									$size = "home-box";
								}
								else {
									$size = "full";
								}
								
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								?>
								<img src="<?php echo $image[0]; ?>" alt="">
							</div>
						</div>

						<?php
					}
					else { ?>
						<a href="<?php the_sub_field('box_url'); ?>">
							<?php
							//Variables
							$attachment_id = get_sub_field('box_image');
							if(get_sub_field('box_width') == 'col-lg-8') {
								$size = "home-box2";
							}
							elseif(get_sub_field('box_width') == 'col-lg-4') {
								$size = "home-box";
							}
							else {
								$size = "full";
							}
							
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							?>
							<img src="<?php echo $image[0]; ?>" alt="">
							<span class="box-caption"><?php the_sub_field('box_title'); ?></span>
						</a>
					<?php } ?>
					
				</div>
		 
			<?php endwhile; ?>
		 
			</div>
		 
		<?php endif; ?>
			<!-- <div class="row-box row">

				<div class="box-col col-lg-4">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sample-box.jpg" alt="">
						<span class="box-caption">Gallery</span>
					</a>
				</div>
				<div class="box-col col-lg-4">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sample-box.jpg" alt="">
						<span class="box-caption">Gallery</span>
					</a>
				</div>
				<div class="box-col col-lg-4">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sample-box.jpg" alt="">
						<span class="box-caption">Gallery</span>
					</a>
				</div>
				<div class="box-col col-lg-4">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sample-box.jpg" alt="">
						<span class="box-caption">Gallery</span>
					</a>
				</div>
				<div class="box-col col-lg-4">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sample-box.jpg" alt="">
						<span class="box-caption">Gallery</span>
					</a>
				</div>
				<div class="box-col col-lg-4">
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sample-box.jpg" alt="">
						<span class="box-caption">Gallery</span>
					</a>
				</div>
			</div> -->

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
