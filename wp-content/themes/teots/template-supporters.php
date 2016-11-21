<?php
/**
 * Template Name: Supporters Template
 *
 * @package teots
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

          <?php
            if( have_rows('supporter') ):
                $supporter_array = array();
                while ( have_rows('supporter') ) : the_row();
                  $supporter = array(
                    'name' => get_sub_field('name'),
                    'lat' => get_sub_field('latitude'),
                    'lng' => get_sub_field('longitude'),
                    'img' => get_sub_field('image'),
                    'desc' => get_sub_field('description'),
                    'isShop' => get_sub_field('isshop'),
                    'isGarage' => get_sub_field('isgarage'),
                    'isCollectionPoint' => get_sub_field('iscollectionpoint'),
                    'isCouncil' => get_sub_field('iscouncil')
                  );
                  array_push($supporter_array, $supporter);
                endwhile;

                $json = json_encode($supporter_array);
            endif;
            ?>

            <span id='json' data-json='<?php echo $json; ?>'></span>

          <div class="supportersHead">
            <div class="container">
              <h1>Our Supporters</h1>
              <p>There are many people, especially in Merseyside but all across the world who support our campaign and want to help us.</p>
              <p>Below you can find all of the shops, petrol stations and councils which are helping us and joining our campaign.
              You can also see which supporters of ours are collection points, from here you are able to purchase stickers and leaflets
              to help us spread the word!</p>
            </div>
          </div>

          <div class="supportersMap">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">

                  <div class="mapOptions">

                    <!--<div class="mapOption" id="shop">
                      <h4>Shops</h4>
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      <p>Our shop supporters are shops which have joined our campaign
                        and vowed not to sell The S*n. If you can please shop at one
                        of these stores! Thank you.</p>
                        <input type="checkbox" class="mapCheckbox" id="checkbox-shopping" checked="checked">
                        <label for="checkbox-shopping">Show Shops</label>
                    </div>

                    <div class="mapOption" id="collection">
                      <h4>Collection Points</h4>
                      <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                      <p>Our collection points are places who are helping
                        support us by selling stickers and posters to anyone
                        who would like to spread the word!</p>
                        <input type="checkbox" class="mapCheckbox" id="checkbox-collection" checked="checked">
                        <label for="checkbox-collection">Show Collection Points</label>
                    </div>

                    <div class="mapOption" id="garage">
                      <h4>Petrol Stations</h4>
                      <i class="fa fa-taxi" aria-hidden="true"></i>
                      <p>Our petrol station supporters are petrol stations which have vowed not to sell The S*n.
                          If you need to fill up your car try to use one of these stations!</p>
                          <input type="checkbox" class="mapCheckbox" id="checkbox-garage" checked="checked">
                          <label for="checkbox-garage">Show Petrol Stations</label>
                    </div>

                    <div class="mapOption" id="council">
                      <h4>Councils</h4>
                      <i class="fa fa-building" aria-hidden="true"></i>
                      <p>Our council supporters are councils who have backed our campaign and have
                        asked public council run servies not to sell The S*n.</p>
                        <input type="checkbox" class="mapCheckbox" id="checkbox-council" checked="checked">
                        <label for="checkbox-council">Show Councils</label>
                    </div>-->

                    <div class="mapOption selected" id="shop">
                      <h4>Shops</h4>
                      <p>Our shop supporters are shops which have joined our campaign
                        and vowed not to sell The S*n. If you can please shop at one
                        of these stores! Thank you.</p>
                    </div>

                    <div class="mapOption" id="collection">
                      <h4>Collection Points</h4>
                      <p>Our collection points are places who are helping
                        support us by selling stickers and posters to anyone
                        who would like to spread the word!</p>
                    </div>

                    <div class="mapOption" id="garage">
                      <h4>Petrol Stations</h4>
                      <p>Our petrol station supporters are petrol stations which have vowed not to sell The S*n.
                        If you need to fill up your car try to use one of these stations!</p>
                    </div>

                    <div class="mapOption" id="council">
                      <h4>Councils</h4>
                      <p>Our council supporters are councils who have backed our campaign and have
                        asked public council run servies not to sell The S*n.</p>
                    </div>

                  </div>

                </div>
                <div class="col-sm-7">
                  <div class="mapContainer">
                    <!--<div id="map"></div>-->
                    <!-- Shop List -->
                    <iframe class="supporter-map" id="shop-map" src="https://www.google.com/maps/d/embed?mid=1h49XLR__T8r1rUvHHCoV8yVm10o" width="640" height="480"></iframe>
                    <!-- Garage List -->
                    <iframe class="supporter-map" id="garage-map" src="https://www.google.com/maps/d/embed?mid=1FjlbkfAV3-ZaHEc_8JCwefUF5vE" width="640" height="480"></iframe>
                    <!-- Collection Points -->
                    <iframe class="supporter-map" id="collection-map" src="https://www.google.com/maps/d/embed?mid=1M5RBQ6WXNLdgNvLVSdk_OH1NS-k" width="640" height="480"></iframe>
                    <!-- Councils -->
                    <iframe class="supporter-map" id="council-map" src="https://www.google.com/maps/d/embed?mid=1CWlgsNCdyuwZvN8WvkIDtHdjwto" width="640" height="480"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="supportersTaxis">
            <div class="container">

              <h2>Penny for the Fleet!</h2>

              <div class="row">
                <div class="col-sm-8">
                  <p>After having an amazing success with our facebook "penny for the fleet" campaign, where we raised enough money to wrap 8 taxis with our campaign message. </p>
                  <p>Since then, we have further finaced another 19 proud hackneys.
                    We are now aiming to wrap 96! We have 96 reasons to do this, we hope you will join in a worthy cause, to spread the message further and faster, to every city in the nation.
                    The message is clear #SunNotWelcomeHere </p>

                  <p>To help us raise funds to wrap 96 taxis please visit our <a class="link" href="http://www.crowdfunder.co.uk/penny-for-the-fleet/?">Penny for the Fleet Crowdfunder page</a> to find out more!</p>

                  <a href="http://www.crowdfunder.co.uk/penny-for-the-fleet/?" class="btn btn-primary teotsButton">Penny for the Fleet Crowdfunder page</a>

                </div>
                <div class="col-sm-4">
                  <img src="http://placehold.it/350x150">
                </div>
              </div>
            </div>

          </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
