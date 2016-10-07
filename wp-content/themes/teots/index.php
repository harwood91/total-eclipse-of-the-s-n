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
							<p>On 15th April 1989 a disaster at Hillsborough Stadium in Sheffield led, ultimately, to the deaths of 96 innocent fans
								who had left home that morning to watch a football match. Due to crowd control mis-management those fans, who’s
								ages ranged from 10 to 67 years old, had the life crushed out of them.</p>
								<p>Contrary to the facts, the S*n published a front page story with the banner headline ‘The Truth’ which contained
								blatant lies. Here are just a couple of the lies: ‘Drunken Liverpool fans viciously attacked workers as they tried to rescue victims and police officers, firemen
								and ambulance crew were punched, kicked and urinated upon.’ This was printed in a British National Newspaper!
								For this reason we call on all retailers and vendors of newspapers on the Liverpool City Region Transport
								Network to stop selling The S*n.</p>
						</div>
						<div class="col-sm-5">
							<img src="http://placehold.it/300x200">
						</div>
					</div>

				</div>
			</div>

			<div class="homeInvolved">
				<div class="container">
					<h1>How can you get involved?</h1>
					<p>Want to help us with our campaign? Whether you're a shop owner, a taxi driver or simply a person who believes in our cause there's plenty you can do to get involved. Please view a few of our options below</p>
					<div class="row">
						<div class="col-sm-4">
							<div class="threePart" id="stickers">
								<h3>Buy Stickers</h3>
								<img src="http://placehold.it/300x200">
								<p></p>
								<a class="btn btn-primary teotsButton large" href="#">Go To Shop</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="threePart" id="shop">
								<h3>Join Our Campaign</h3>
								<img src="http://placehold.it/300x200">
								<p></p>
								<a class="btn btn-primary teotsButton large" href="#">Find Out More</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="threePart" id="share">
								<h3>Share with your Friends</h3>
								<img src="http://placehold.it/300x200">
								<p></p>
								<a class="btn btn-primary teotsButton large" href="#">Find Out More</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="homeMedia">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<div class="latestNews">
								<h2>Latest News</h2>

								<div class="news">
									<img src="http://placehold.it/150x150">
									<h4>News Title</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas leo quis venenatis malesuada. Donec accumsan magna a iaculis pellentesque.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-primary teotsButton" href="#">Read More</a>
								</div>

								<div class="news">
									<img src="http://placehold.it/150x150">
									<h4>News Title</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas leo quis venenatis malesuada. Donec accumsan magna a iaculis pellentesque.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-primary teotsButton" href="#">Read More</a>
								</div>

								<div class="news">
									<img src="http://placehold.it/150x150">
									<h4>News Title</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas leo quis venenatis malesuada. Donec accumsan magna a iaculis pellentesque.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									<a class="btn btn-primary teotsButton" href="#">Read More</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="twitterFeed">
								<h2>Twitter</h2>

								<div class="main-twitter">

									<div class="twitter-head">
										<p>Follow us on Twitter <a href="https://twitter.com/totaleclipse96">@totaleclipse96</a></p>
										<i class="fa fa-twitter"></i>
									</div>

									<?php
									get_sidebar($name = "search");
									?>

									<script>
										$(document).ready(function(){

											$('.widget-title').hide();
											$('.timeline-Viewport').css("width", "100%");

										});
									</script>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
