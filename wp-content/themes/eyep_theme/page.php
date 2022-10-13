<?php get_header(); ?>

	<div class="panel main">

		<div class="row">

			<div class="M12">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="reader_content" <?php post_class(); ?>>

						<?php the_content(); ?>						

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>