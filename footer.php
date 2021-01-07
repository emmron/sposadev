<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
	<footer id="colophon" class="site-footer">

        <div class="site-footer__newsletter">
            <div class="container">
                <div class="site-footer__newsletter--wrapper">
                    <h3 class="site-footer__newsletter--header">SUBSCRIBE TO OUR NEWSLETTER</h3>
	                <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
        </div>

        <div class="site-footer__contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="site-footer__contact--phone">
                            <a class="site-footer__contact--phone__link"
                               href="tel:0398187997">(03) 9818 7997</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-footer__nav">
	        <?php
		        wp_nav_menu(
			        array(
				        'theme_location' => 'menu-1',
				        'menu_id'        => 'footer-menu',
			        )
		        );
	        ?>
        </div>
        <div class="site-footer__socialLegal">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="site-footer__social">
                            <a href="#" class="site-footer__social--link facebook"></a>
                            <a href="#" class="site-footer__social--link instagram"></a>
                            <a href="#" class="site-footer__social--link pinterest"></a>
                            <a href="#" class="site-footer__social--link google"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
	</footer>




</div>


    <!-- ACF MAP --->
        <section class="acf-map-code">
            <style type="text/css">
                .acf-map {
                    width: 100%;
                    height: 400px;
                    border: #ccc solid 1px;
                    margin: 20px 0;
                }

                // Fixes potential theme css conflict.
                   .acf-map img {
                       max-width: inherit !important;
                   }
            </style>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOm6xsEL7MViTvzxhjmP6BRWPpCdCOtgM"></script>
            <script type="text/javascript">
				(function( $ ) {

					/**
					 * initMap
					 *
					 * Renders a Google Map onto the selected jQuery element
					 *
					 * @date    22/10/19
					 * @since   5.8.6
					 *
					 * @param   jQuery $el The jQuery element.
					 * @return  object The map instance.
					 */
					function initMap( $el ) {

						// Find marker elements within map.
						var $markers = $el.find('.marker');

						// Create gerenic map.
						var mapArgs = {
							zoom        : $el.data('zoom') || 16,
							mapTypeId   : google.maps.MapTypeId.ROADMAP,
							styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
						};
						var map = new google.maps.Map( $el[0], mapArgs );

						// Add markers.
						map.markers = [];
						$markers.each(function(){
							initMarker( $(this), map );
						});

						// Center map based on markers.
						centerMap( map );

						// Return map instance.
						return map;
					}

					/**
					 * initMarker
					 *
					 * Creates a marker for the given jQuery element and map.
					 *
					 * @date    22/10/19
					 * @since   5.8.6
					 *
					 * @param   jQuery $el The jQuery element.
					 * @param   object The map instance.
					 * @return  object The marker instance.
					 */
					function initMarker( $marker, map ) {

						// Get position from marker.
						var lat = $marker.data('lat');
						var lng = $marker.data('lng');
						var latLng = {
							lat: parseFloat( lat ),
							lng: parseFloat( lng )
						};

						// Create marker instance.
						var marker = new google.maps.Marker({
							position : latLng,
							map: map
						});

						// Append to reference for later use.
						map.markers.push( marker );

						// If marker contains HTML, add it to an infoWindow.
						if( $marker.html() ){

							// Create info window.
							var infowindow = new google.maps.InfoWindow({
								content: $marker.html()
							});

							// Show info window when marker is clicked.
							google.maps.event.addListener(marker, 'click', function() {
								infowindow.open( map, marker );
							});
						}
					}

					/**
					 * centerMap
					 *
					 * Centers the map showing all markers in view.
					 *
					 * @date    22/10/19
					 * @since   5.8.6
					 *
					 * @param   object The map instance.
					 * @return  void
					 */
					function centerMap( map ) {

						// Create map boundaries from all map markers.
						var bounds = new google.maps.LatLngBounds();
						map.markers.forEach(function( marker ){
							bounds.extend({
								lat: marker.position.lat(),
								lng: marker.position.lng()
							});
						});

						// Case: Single marker.
						if( map.markers.length == 1 ){
							map.setCenter( bounds.getCenter() );

							// Case: Multiple markers.
						} else{
							map.fitBounds( bounds );
						}
					}

// Render maps on page load.
					$(document).ready(function(){
						$('.acf-map').each(function(){
							var map = initMap( $(this) );
						});
					});

				})(jQuery);
            </script>

            <style type="text/css">
                /* Set a size for our map container, the Google Map will take up 100% of this container */
                #map {
                    width: 750px;
                    height: 500px;
                }
            </style>





        </section>
    <!-- ACF MAP -->


<?php wp_footer(); ?>

</body>
</html>
