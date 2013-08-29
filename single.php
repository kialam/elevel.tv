<?php get_header();?>
	<div class="band introduction">
		<div class="container">
			<div class="video row">
				<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true" class="back-to-videos">&larr; Back to Videos</a>
				<!-- <a href="http://elevel.tv/" target="_self" class="back-to-videos">&larr; Back to Videos</a> -->
			<div class="sixteen columns">
				
			<!-- Start the loop -->
			<?php if (have_posts()) :
		   while (have_posts()) :
		      the_post();
		      the_content();
		   endwhile;
		endif; ?>
			<!--?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?-->
		
			<!--?php endwhile; else: ?-->
			<!-- <p>Sorry, no posts matched your criteria.</p> -->
			<!--?php endif; ?-->
	</div>
	</div>
	</div>
</div>
<?php get_footer();?>