	<?php /* Template Name: Homework Page */ ?>

    <?php get_header(); 
	
?>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center"><?php wp_title(); ?></h1>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

	<div class="row">
		<div class="col-md-12">
			<?php  if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?> 
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php
            
                $args = array( 'post_type' => 'homework', 'posts_per_page' => 10 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="homework-sec">';
				the_title( '<h1 class="text-center"><u>', '</u></h1>' );
				$date = get_the_date();
				echo '<p class="margin-left-20"> '.$date.'</p>';
				$content = get_the_content();
				echo '<p class="margin-left-20"> '.$content.'</p>';
				echo '</div>';
                endwhile;
               
			?>
		</div>
	</div>

<?php get_footer(); ?>