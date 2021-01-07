<?php
/**
 *
 * Template Name: Book an appointment
 *
 */

get_header();
?>

	<main id="primary" class="site-main book-appt">
        
        <section class="book-appt__content">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        
                        <div class="book-appt__content--wrapper">
                        <div class="book-appt__content--wrapper__container">
                            <h1 class="book-appt__content--header">
                                Book an appointment
                            </h1>
                            <p class="book-appt__content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dictum dolor eget lorem interdum viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent libero est, facilisis nec diam facilisis, euismod posuere enim. Duis feugiat tempus feugiat. Fusce placerat tortor eget leo convallis sagittis. Ut quis blandit dui, a finibus lorem. </p>
                            <div class="book-appt__bar step-one">
                                <span>1. Your Details</span>

                            </div>
                            <div class="book-appt__form">
		                        <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49"]') ?>
                            </div>
                        </div>
                        </div>
                       
                    
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="book-appt__img">
                        
                        </div>
                    </div>
            </div>
        </section>

	</main><!-- #main -->
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->

<?php
get_footer();
