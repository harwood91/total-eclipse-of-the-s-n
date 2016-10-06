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

			<div class="topSection">
				<div class="container">
					<p class="quote">"Our aim is to promote shops in Liverpool who don’t sell the s*n newspaper and persuade stores who do sell to join them."</p>
				</div>
			</div>

			<div class="homeAbout">
				<div class="container">
					<h1>Who are Total Eclipse of The S*n?</h1>
					<div class="row">
						<div class="col-sm-7">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas leo quis venenatis malesuada. Donec accumsan magna a iaculis pellentesque.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla ultrices leo ut feugiat. Aenean condimentum turpis eget magna scelerisque,
								scelerisque ultrices orci suscipit. Integer faucibus volutpat mauris ac cursus. Sed dapibus at urna vitae iaculis. Phasellus nec lacus non nibh
								tincidunt iaculis non ac sem. Morbi non metus ut dui posuere condimentum. Praesent vel purus id diam porttitor gravida. Cras accumsan, nisl
								nec aliquet fringilla, ligula turpis ornare augue, id vestibulum urna ipsum vel enim. Vivamus vestibulum suscipit ante ac lobortis. Proin
								consectetur mi a augue iaculis viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="col-sm-5">
							<img src="http://placehold.it/300x200">
						</div>
					</div>

				</div>
			</div>

			<div class="homeWhy">
				<div class="container">
					<h1>Why should you join our campaign?</h1>
					<div class="row">
						<div class="col-sm-7">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas leo quis venenatis malesuada. Donec accumsan magna a iaculis pellentesque.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla ultrices leo ut feugiat. Aenean condimentum turpis eget magna scelerisque,
								scelerisque ultrices orci suscipit. Integer faucibus volutpat mauris ac cursus. Sed dapibus at urna vitae iaculis. Phasellus nec lacus non nibh
								tincidunt iaculis non ac sem. Morbi non metus ut dui posuere condimentum. Praesent vel purus id diam porttitor gravida. Cras accumsan, nisl
								nec aliquet fringilla, ligula turpis ornare augue, id vestibulum urna ipsum vel enim. Vivamus vestibulum suscipit ante ac lobortis. Proin
								consectetur mi a augue iaculis viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<div class="col-sm-5">
							<img src="http://placehold.it/300x200">
						</div>
					</div>

				</div>
			</div>

			<div class="homeInvolved">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 stickers">
							<h3>Buy Stickers</h3>
							<img src="http://placehold.it/300x300">
							<p></p>
						</div>
						<div class="col-sm-4 shop">
							<h3>Join Our Campaign</h3>
							<img src="http://placehold.it/300x300">
							<p></p>
						</div>
						<div class="col-sm-4 share">
							<h3>Share with your Friends</h3>
							<img src="http://placehold.it/300x300">
							<p></p>
						</div>
					</div>
				</div>
			</div>


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
