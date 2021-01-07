<?php
/**
 *
 * Template Name: Contact Us
 *
 */

get_header();
?>

	<main id="primary" class="site-main contact-us">

<?php if ( have_rows( 'contact_us_content' ) ) : ?>
	<?php while ( have_rows( 'contact_us_content' ) ) : the_row(); ?>
	    <?php $store_map = get_sub_field('map_location'); ?>
	<?php endwhile; ?>
<?php endif; ?>
        <section class="contact-us-banner sposa-page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="sposa-page-banner__title">visit your nearest boutique</h2>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="contact-us__content">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-12 col-xs-12">
                        <div class="contact-us__content--imgCol" style="background-image: url(");"></div>
                    </div>
                
                    <div class="col-md-4 col-xs-12">
                        <div class="contact-us__stores">
                            <div class="store melbourne-store">
                                <h2 class="store__header">Melbourne Boutique</h2>
                                <div class="store__info">
                                    <label class="store__address"><?php echo $store_map['address']; ?></label>
                                    <label class="store__phone"><a href="tel:0398187997">(03) 9818 7997</a></label>
                                    <label class="store__email">
                                        <a href="mailto:melbourne@thesposagroup.com.au">melbourne@thesposagroup.com.au</a>
                                    </label>
                                </div>
                                
                                <div class="store__hours">
                                    <h2 class="store__header">Open Hours</h2>
                                    <ul class="store__hours--ul">
                                        <li class="store__hours--ul__li">
                                            <span class="store__hours__ul__li--day">Monday - Friday</span>
                                            <span class="store__hours__ul__li--hours">10am - 5pm</span>
                                        </li>
                                        <li class="store__hours--ul__li">
                                        <span class="store__hours__ul__li--day">Thursday</span>
                                            <span class="store__hours__ul__li--hours">10am - 8pm</span>
                                        </li>
                                        <li class="store__hours--ul__li">
                                        <span class="store__hours__ul__li--day">Saturday</span>
                                            <span class="store__hours__ul__li--hours">9am - 5pm</span>
                                        </li>
                                        <li class="store__hours--ul__li">
                                        <span class="store__hours__ul__li--day">Sunday</span>
                                            <span class="store__hours__ul__li--hours">11am - 3pm</span>
                                        </li>
                                    </ul>
                                </div>
                                
                                <a href="#store__message" class="store__message">Send a message</a>
                                <div id="store__message" style="display: none;">
                                    <div class="store__message--content">
                                        <h2 class="store__message--header">Send a Message</h2>
                                    <?php echo do_shortcode('[gravityform id="9" title="false" description="false" ajax="true"]'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-md-8 col-xs-12">
	                            <?php if(is_array($store_map)) { ?>
                                <div class="acf-map" data-zoom="16">
                                    <div id="map" class="marker" data-lat="<?php echo esc_attr($store_map['lat']); ?>" data-lng="<?php echo esc_attr($store_map['lng']); ?>"></div>
                                </div>
                                <?php } ?>
                    </div>
                
                </div>
            
         
            </div>
        </div>
        
    </main>
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->

<?php
get_footer();
