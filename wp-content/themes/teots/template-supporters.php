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
                <div class="col-sm-4">

                  <div class="mapOptions">

                    <div class="mapOption" id="shop">
                      <h4>Shops</h4>
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                      <p>Our shop supporters are shops which have joined our campaign
                        and vowed not to sell The S*n. If you can please shop at one
                        of these stores! Thank you.</p>
                        <input type="checkbox" class="mapCheckbox" id="checkbox-shopping" checked="checked"> Show on Map
                    </div>

                    <div class="mapOption" id="collection">
                      <h4>Collection Points</h4>
                      <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                      <p>Our collection points are places who are helping
                        support us by selling stickers and posters to anyone
                        who would like to spread the word!</p>
                        <input type="checkbox" class="mapCheckbox" id="checkbox-collection" checked="checked"> Show on Map
                    </div>

                    <div class="mapOption" id="garage">
                      <h4>Petrol Stations</h4>
                      <i class="fa fa-taxi" aria-hidden="true"></i>
                      <p>Our petrol station supporters are petrol stations which have vowed not to sell The S*n.
                          If you need to fill up your car try to use one of these stations!</p>
                          <input type="checkbox" class="mapCheckbox" id="checkbox-garage" checked="checked"> Show on Map
                    </div>

                    <div class="mapOption" id="council">
                      <h4>Councils</h4>
                      <i class="fa fa-building" aria-hidden="true"></i>
                      <p>Our council supporters are councils who have backed our campaign and have
                        asked public council run servies not to sell The S*n.</p>
                        <input type="checkbox" class="mapCheckbox" id="checkbox-council" checked="checked"> Show on Map
                    </div>

                  </div>

                </div>
                <div class="col-sm-8">
                  <div id="map" style="height: 354px; width:713px;"></div>
                </div>
              </div>
            </div>
          </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
