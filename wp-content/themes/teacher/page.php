<?php get_header(); 

?>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center"><?php wp_title($sep = ""); ?></h1>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

	<div class="row">
		<div id="main-content" class="col-md-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>