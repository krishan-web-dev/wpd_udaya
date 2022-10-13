<?php get_header(); ?>

	<div class="panel main">

		<div class="row">

			<div class="M12">

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</div>
		
		</div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>