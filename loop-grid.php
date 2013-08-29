<?php
/**
 * The loop to show posts in columns
 *
 * loop-grid.php
 *
 * @package WordPress
 * @subpackage elevel.tv
 * @since 3.0.0
 */
?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'elevel_website' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested Archive. Perhaps searching will help find a related post.', 'elevel_website' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>


<?php /* Start the Loop */ ?>


<?php $num_cols = 4; // set the number of columns here 

for ( $i=1 ; $i <= $num_cols; $i++ ) :
echo '<div id="col-' . $i . '" class="col" >';
$counter = $num_cols + 1 - $i; ?>

<?php while (have_posts()) : the_post();
if( $counter%$num_cols == 0 ) : 
// begin of core posts output ?>
			<div class="cap-bot">
			<div class="box entry-featured-image">
			<?php the_post_thumbnail(); ?>
			<figcaption><?php the_title(); ?>

<?php //end of posts output

endif; $counter++;
endwhile;
rewind_posts();
echo '</div>'; //closes the column div
endfor; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<!--?php if(function_exists('wp_paginate')) {
    wp_paginate();
} ?-->
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
				<?php if(function_exists('page_navi')) { page_navi(); } else { ?>
					<div class="nav-next"><?php previous_posts_link( __( '&larr; Back <span class="meta-nav"></span>', 'elevel_website' ) ); ?></div>
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav"></span> More &rarr;', 'elevel_website' ) ); ?></div>
					
					<?php } ?>
				</div><!-- #nav-below -->
<?php endif; 
 wp_reset_query(); ?> 