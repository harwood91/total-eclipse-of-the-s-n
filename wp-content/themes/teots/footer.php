<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teots
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h3>Follow us on Social Media!</h3>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://twitter.com/totaleclipse96"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://plus.google.com/u/0/115392298920541165730"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/totaleclipseofthesun/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
				<div class="col-sm-6">
					<div class="pageLinks">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Supporters</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">The Team</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>

					<div class="pageLinks">
						<ul>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/maps.js"></script>

</body>
</html>
