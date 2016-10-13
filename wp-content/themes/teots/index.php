<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package teots
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="newsMain">
				<div class="container">
					<h1>News</h1>
					<p>Below you can view all of our news articles.</p>
				</div>
			</div>

			<div class="newsSection">
				<div class="container">
					<?php
					if ( have_posts() ):
						$counter = 0;
						?>

						<?php while ( have_posts() ) : the_post(); ?>
						<?php
						$counter++;
						if($counter % 3 == 1):
							echo '<div class="row">';
						endif;
						?>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="blog-item">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
									<?php echo the_post_thumbnail('blog-thumbnail', array('class' => 'img-responsive') ); ?>
								</a>
								<div class="blog-item-link">
											<span class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></span>
											<span class="date">(<?php the_time('d/m/y'); ?>)</span>
								</div>
							</div>
							<hr class="spacer-30"/>
							<?php
							if($counter % 3 == 0):
								echo '</div>';
							endif;
							?>
						</div>
					<?php endwhile; ?>

						<?php
						if($counter != get_settings('posts_per_page')):
							echo '</div>';
						endif;
						?>

						<div class="row">
							<div class="col-sm-2">
								<?php $previous = get_previous_posts_link(); ?>
								<?php if($previous): ?>
									<div class="paging text-center">
										<?php previous_posts_link( '<strong><i class="fa fa-arrow-left" aria-hidden="true"></i> NEWER POSTS</strong>' ); ?>
									</div>
								<?php endif; ?>
								<hr class="spacer-30"/>
							</div>
							<div class="col-sm-2 col-sm-offset-8">
								<?php $next = get_next_posts_link(); ?>
								<?php if($next): ?>
									<div class="paging text-center">
										<?php next_posts_link( '<strong>OLDER POSTS <i class="fa fa-arrow-right" aria-hidden="true"></i></strong>' ); ?>
									</div>
								<?php endif; ?>
								<hr class="spacer-30"/>
							</div>
						</div>

					<?php else: ?>
						<div class="row">
							<div class="col-sm-12">
								<h2>No posts to display</h2>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
