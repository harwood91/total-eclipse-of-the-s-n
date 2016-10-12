<?php
/**
 * Template Name: Contact Template
 *
 * @package teots
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'andrew@drawandcode.com';
    $subject = 'email test';
    $body = 'The email body content';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail( $to, $subject, $body, $headers );
}

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="contactUs">
                <h3>Contact Us</h3>
                <form style="max-width: 100%" class="clearfix" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="contactName" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Write your enquiry here"></textarea>
                    </div>
                    <button type="submit" value="submit" class="btn btn-default btn-cakes float-right">Submit Enquiry</button>
                </form>
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