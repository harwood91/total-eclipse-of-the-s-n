<?php
/**
 * Template Name: Contact Template
 *
 * @package teots
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="contactHead">
                <div class="container">
                    <h1>Contact Us</h1>
                    <p>If you have any questions or want to find out more about our campaign please don't hesitate to contact us! Simply fill in the form below and we'll get back to you asap!</p>
                </div>
            </div>

            <div class="contactForm">
                <div class="container">
                    <div class="col-sm-6">
                        <div class="formSection">

                            <h2>Contact Form</h2>
                            <p>If you wish to contact us please fill in the form below and we'll get back to you as soon as possible!</p>

                            <form class="form form-horizontal" role="form" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                                <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="contactName" placeholder="First & Last Name" value="">
                                </div>
                                <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                </div>
                                <div class="form-group">
                                        <textarea class="form-control" placeholder="Enter your message here ..." rows="4" name="message"></textarea>
                                </div>
                                <div class="form-group">
                                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary teotsButton large">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <! Will be used to display an alert to the user>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="otherContact">
                            <h2>Social Media</h2>
                            <p>If you would rather contact us via social media please follow us on twitter or join our campaign group on facebook.</p>
                            <div class="sm">
                                <i class="fa fa-twitter" aria-hidden="true"></i> <a href="https://twitter.com/totaleclipse96">@totaleclipse96</a>
                            </div>
                            <div class="sm">
                                <i class="fa fa-facebook" aria-hidden="true"></i> <a href="https://www.facebook.com/totaleclipseofthesunpage/?fref=ts">Total Eclipse of the S&n</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();