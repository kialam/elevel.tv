<?php
/*
Template Name: editorial test grid
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
?>
<div class="first edit row">
<h3>Dave Becker</h3>
<?php
//Query One
$args=array(
   'cat'=> 31,
   'posts_per_page' => 12,
);
query_posts($args);

//Get the Posts
get_template_part( 'test', 'editorial' );
wp_reset_query(); ?>
</div>
<!--Do Layout Stuff-->
<div class="edit row">
<h3>Erik Johnson</h3>

<?php
//Query Two
$args=array(
   'cat'=>30,
   'posts_per_page' => 12,
);
query_posts($args);

//Get the Posts
get_template_part( 'test', 'editorial' );
wp_reset_query(); ?>
</div>
<!--Do Layout Stuff-->
<div class="edit row">
<h3>Mahoko Kuramasu</h3>

<?php
//Query Two
$args=array(
   'cat'=>29,
   'posts_per_page' => 12,
);
query_posts($args);

//Get the Posts
get_template_part( 'test', 'editorial' );
wp_reset_query(); ?>
</div>

<div class="edit row">
<h3>Graham Willcox</h3>

<?php
//Query Two
$args=array(
   'cat'=>40,
   'posts_per_page' => 12,
);
query_posts($args);

//Get the Posts
get_template_part( 'test', 'editorial' );
wp_reset_query();


			 //query_posts('cat=5&posts_per_page=20&paged='.$paged); //set your own query here
			 //query_posts('cat=27&posts_per_page=20&paged='.$paged);
			 //get_template_part( 'loop', 'audio' );
			 
			 //wp_reset_query();
			?>
		</div>
			</div><!-- #content -->
		</div><!-- #container -->
		</div>
<!--?php get_sidebar(); ?-->
<?php get_footer(); ?>