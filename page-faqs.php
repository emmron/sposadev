<?php
/**
 *
 * Template Name: FAQs
 *
 */

get_header();
?>

	<main id="primary" class="site-main faq">
        <section class="contact-us-banner sposa-page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="sposa-page-banner__title">Frequently asked questions</h2>
                    </div>
                </div>
            </div>
        </section>
 
			<div class="faq-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							
							<div class="faq-accordian">
							
							<div class="faq-accordian__cat">
								<div class="faq--accordian__cat--single"><span>Appointments</span></div>
							</div>
								<div class="faq-accordian__cat">
                                    <div class="faq--accordian__cat--single"><span>Making my Purchase</span></div>
								</div>
								<div class="faq-accordian__cat">
                                    <div class="faq--accordian__cat--single"><span>Fittings & Alterations</span></div>
								</div>
								<div class="faq-accordian__cat">
									<div class="faq--accordian__cat--single"><span>Shipping</span></div>
								</div>
								<div class="faq-accordian__cat">
									<div class="faq--accordian__cat--single"><span>Other</span></div>
								</div>
							</div>
						
						</div>
						<div class="col-md-4">
                            
                            <div class="faq__rightImg" >
                            
                            </div>
						
						</div>
					</div>
				</div>
			</div>
 

	</main><!-- #main -->
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->
<?php
get_footer();
