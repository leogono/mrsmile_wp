<?php
/**
 * The template for displaying search forms in Mr Smile Theme
 *
 * @package Mr Smile Theme
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'mrsmile_wp' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'mrsmile_wp' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'mrsmile_wp' ); ?>" />
	</label>
	<button type="submit" class="search-button"><i class="fa fa-search"></i></button>
</form>
