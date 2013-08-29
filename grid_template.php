<?php
/*
Template Name: post grid
 * 
 * @package WordPress
 * @subpackage elevel.tv
 * @since 3.0.0
 */
?>
 
<?php get_header(); ?>

		<div id="container">
		<div class="container">
			<div id="content">
<?php /* This calls the subnav */ ?>
<?php wp_nav_menu(
				 array(
				 	'menu' 					=> 'Secondary Navigation',
				 	'container' 			=> 'div',
				 	'container_class'		=> 'row subnav'
				 	)
			); ?>
<?php get_search_form(); ?>
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			 query_posts('cat=0&posts_per_page=20&paged='.$paged); //set your own query here
			 
			 get_template_part( 'loop', 'grid' );
			 
			 wp_reset_query();
			?>
			</div><!-- #content -->
		</div><!-- #container -->
		</div>
<!--?php get_sidebar(); ?-->
<?php get_footer(); ?>