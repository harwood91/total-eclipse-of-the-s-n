<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package teots
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-sm-4">
			<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ));?>

		</div>
		<div class="col-sm-8">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<?php teots_posted_on(); ?>
		</div>
	</div>

</article><!-- #post-## -->
