<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package _s
	 */

?>

<!-- Hero Slider -->

    <section class="home__hero">
    <div class="row">
        <div class="home__hero--slider">
			<?php if (have_rows('home_content')) : ?>
				<?php while (have_rows('home_content')) : the_row(); ?>
					<?php if (have_rows('hero_slider')) : ?>
						<?php while (have_rows('hero_slider')) : the_row(); ?>
                            
                            <?php if( wp_is_mobile() )
                            {
	                            $slider_image = get_sub_field('slider_image_mobile');
	
                            } else {
								$slider_image = get_sub_field('slider_image');
							}
       
						?>
       
							<?php if ($slider_image) : ?>
                                <div class="slick-slide__content" style="background-image: url(<?php echo $slider_image; ?>)">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="slick-slide__content--wrapper">
                                                    <h2 class="slick-slide__content--header">PLATinum by Demetrios</h2>
                                                    <h3 class="slick-slide__content--subheader">NEW ARRIVALS</h3>
                                                    <a href="#" class="slick-slide__content--link">View Collection</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							
							<?php endif; ?>
       
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<!-- End Slider -->

<!-- Row 1 -->

    <section class="exploreRange row">
    <div class="container">
        <div class="row">
            <div class="exploreRange__text col">
				<?php if (have_rows('home_content')) : ?>
					<?php while (have_rows('home_content')) : the_row(); ?>
                        <h2 class="exploreRange__header"><?php the_sub_field('header_row_1'); ?></h2>
                        <p class="exploreRange__p"><?php the_sub_field('subheader_row_1'); ?></p>
                        <a class="exploreRange__bookLink" href="/book-an-appointment">BOOK APPOINTMENT</a>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
			
			<?php if (have_rows('home_content')) : ?>
				<?php while (have_rows('home_content')) : the_row(); ?>
					
					<?php if (get_sub_field('image_column_1')) : ?>
                        <div class="exploreRange__imageCol"
                             style="background-image: url(<?php the_sub_field('image_column_1') ?>);">
	                        <?php $column_1_link_url = get_sub_field( 'column_1_link__url' ); ?>
	                        <?php if ( $column_1_link_url ) : ?>
                                <a href="<?php echo esc_url( $column_1_link_url['url'] ); ?>" target="<?php echo esc_attr( $column_1_link_url['target'] ); ?>"><?php echo esc_html( $column_1_link_url['title'] ); ?></a>
	                        <?php endif; ?>
                        </div>
					<?php endif ?>
					
					<?php if (get_sub_field('image_column_2')) : ?>
                        <div class="exploreRange__imageCol"
                             style="background-image: url(<?php the_sub_field('image_column_2') ?>);">
	                        <?php $column_2_link_url = get_sub_field( 'column_2_link__url' ); ?>
	                        <?php if ( $column_2_link_url ) : ?>
                                <a href="<?php echo esc_url( $column_2_link_url['url'] ); ?>" target="<?php echo esc_attr( $column_2_link_url['target'] ); ?>"><?php echo esc_html( $column_2_link_url['title'] ); ?></a>
	                        <?php endif; ?>
                        </div>
					<?php endif ?>
					
					<?php if (get_sub_field('image_column_3')) : ?>
                        <div class="exploreRange__imageCol"
                             style="background-image: url(<?php the_sub_field('image_column_3') ?>);">
	                        <?php $column_3_link_url = get_sub_field( 'column_3_link__url' ); ?>
	                        <?php if ( $column_3_link_url ) : ?>
                                <a href="<?php echo esc_url( $column_3_link_url['url'] ); ?>" target="<?php echo esc_attr( $column_3_link_url['target'] ); ?>"><?php echo esc_html( $column_3_link_url['title'] ); ?></a>
	                        <?php endif; ?>
                        </div>
					<?php endif ?>
				<?php endwhile; ?>
			<?php endif; ?>

        </div>
    </div>
</section>

<!-- End Row 1 -->

<!-- Bridal Accessories -->

    <?php get_template_part( 'template-parts/front-page/bridal-accessories/bridal', 'accesories' ); ?>

<!-- End Bridal Accessories -->

<!-- Latest Event -->

    <?php get_template_part( 'template-parts/front-page/latest-events/latest', 'events' ); ?>

<!-- End Latest Event -->

<!-- Our Journey -->

    <?php get_template_part( 'template-parts/front-page/our-journey/our', 'journey' ); ?>

<!-- Our Journey Event -->

<!-- Testimonials -->

    <?php get_template_part( 'template-parts/front-page/testimonials/single', 'testimonial' ); ?>

<!-- End Testimonials -->

<!-- Instagram Slider -->

    <?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

<!-- End Instagram Slider -->
