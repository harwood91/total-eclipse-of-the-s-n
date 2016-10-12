<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teots
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    
    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/5df7820823.js"></script>
    
    <!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1fiJz0MgmxyHASkZk25GEr5pztoNsrrA"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="header clearfix">
		<div class="container">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/teots-logo.png">

			<div class="navWrapper">
					<nav class="navbar navbar-default center">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand visible-xs" href="#">Menu</a>
						</div>


						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<?php

								if (is_home()) {
									?>
									<li><a class="current" href="/">Home</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/">Home</a></li>
									<?php
								}

								if (strpos($_SERVER['REQUEST_URI'], '/about/') === 0) {
									?>
									<li><a class="current" href="/about/">About</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/about/">About</a></li>
									<?php
								}

								if (strpos($_SERVER['REQUEST_URI'], '/news/') === 0) {
									?>
									<li><a class="current" href="/news/">News</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/news/">News</a></li>
									<?php
								}

								if (strpos($_SERVER['REQUEST_URI'], '/supporters/') === 0) {
									?>
									<li><a class="current" href="/supporters/">Supporters</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/supporters/">Supporters</a></li>
									<?php
								}

								if (strpos($_SERVER['REQUEST_URI'], '/shop/') === 0) {
									?>
									<li><a class="current" href="/shop/">Shop</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/shop/">Shop</a></li>
									<?php
								}

								if (strpos($_SERVER['REQUEST_URI'], '/team/') === 0) {
									?>
									<li><a class="current" href="/team/">The Team</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/team/">The Team</a></li>
									<?php
								}

								if (strpos($_SERVER['REQUEST_URI'], '/contact/') === 0) {
									?>
									<li><a class="current" href="/contact/">Contact</a></li>
									<?php
								}
								else {
									?>
									<li><a href="/contact/">Contact</a></li>
									<?php
								}


								?>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
			</div>

		</div>
	</div>


	<div id="content" class="site-content">
