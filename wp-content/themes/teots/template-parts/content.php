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
			<div class="image">
				<?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ));?>
			</div>

			<br />



				<?php $args = array(
					'posts_per_page'   => 8,
					'offset'           => 0,
					'category'         => '',
					'category_name'    => '',
					'orderby'          => 'date',
					'order'            => 'DESC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'post',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'author'	   => '',
					'author_name'	   => '',
					'post_status'      => 'publish',
					'suppress_filters' => true
				);
				$posts_array = get_posts( $args ); ?>

			<div class="otherArticles">
				<div class="panel panel-default">
					<!-- Default panel contents -->
					<div class="panel-heading">Other Articles</div>
					<!-- List group -->
					<ul class="list-group">
						<?php foreach($posts_array as $p): ?>
							<li class="list-group-item"><a href="<?php echo $p->guid; ?>"><?php echo $p->post_title; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>

			</div>

		</div>
		<div class="col-sm-8">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<?php teots_posted_on(); ?>
		</div>
	</div>

</article><!-- #post-## -->
