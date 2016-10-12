<?php
/**
 * Template Name: Shop Template
 *
 * @package teots
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div class="shopHead">
                <div class="container">
                    <h1>Our Shop</h1>
                    <p>Many of our supporters have asked where they can get stickers and posters from to help us spread the word!</p>
                    <p>Whilst we have many shops around Liverpool that sell these items we realise that not everyone will be able to get to one of these shops</p>
                    <p>So if you would like some stickers or posters please purchase some below</p>
                </div>
            </div>

            <div class="shopMain">
                <div class="container">
                    <?php
                    while ( have_posts() ) : the_post();

                        the_content();
                        //get_template_part( 'template-parts/content', get_post_format() );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();