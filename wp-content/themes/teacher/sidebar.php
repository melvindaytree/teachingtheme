<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module">
		<ol class="list-unstyled">
			<h4>Archives</h4>
                <ol class="list-unstyled">
                    <?php wp_get_archives( 'type=monthly' ); ?>
                </ol>
			<!-- More archive examples -->
		</ol>
	</div>
	<div class="sidebar-module">
		<h4>Find me on:</h4>
		<ol class="list-unstyled">
			<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
			<li><a href="<?php echo get_option('portfolio'); ?>">Portfolio</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->