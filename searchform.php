<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<!-- <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>"> -->
		<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'elevel_website' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'elevel_website' ); ?>" />
		<!--input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'elevel_website' ); ?>" /-->
	</form>
