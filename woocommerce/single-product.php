<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */
	global $product;
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
	?>
	<?php
		$product_id = get_queried_object_id();
		$wc_product = new WC_Product($product_id);
		$attachment_ids = $wc_product->get_gallery_image_ids();
		$product_title = $wc_product->get_title();
		echo '<pre>';
		var_dump($product_title);
		echo '</pre>';
	?>

	<section class="single-product__hero">
		<div class="container">
			<div class="row">

                <!--- Single Product Slider -->

				    <div class="col-md-6 col-xs-12 single-product__hero--sliderCol">
					<div class="single-product__hero--slider">
							<?php

								foreach( $attachment_ids as $attachment_id )
								{
									$image_url = wp_get_attachment_url( $attachment_id );
									?>
									<div class="single-product__hero--slide">

										<div class="single-product__hero--slide__img"
										     style="background-image: url(<?php echo $image_url; ?>)">

										</div>

									</div>

									<?php
								}
							?>
					</div>



				</div>

                <!-- Single Product Slider -->

                <!-- Single Product Right Col -->

                    <div class="col-md-6 col-xs-12 single-product__rightCol">
                        <?php
	                        do_action( 'woocommerce_before_main_content' );

                        ?>
                        <div class="single-product__rightCol__wrapper">
                            <div class="single-product__details">
                                <h1 class="single-product__title"><?php echo $product_title; ?></h1>
                                <h2 class="single-product__category">Demetrios Collection</h2>
                                <p class="single-product__text">This dreamy, Strapless. Sweetheart neck gown is embellished with intricate beaded lace embroidery over luxurious Organza coupled with Tulle and features a Princess skirt with lavish Chapel train. A matching, optional bolero jacket adds a modest touch.</p>
                                <a href="#inline" class="inline single-product__enquiry">Enquire about this product</a>
                                <div id="inline" style="display:none;">
                                    <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]') ?>
                                </div>

                                <?php
                                $single_product_accordion = get_field('single_product_accordion');
                                $product_details = $single_product_accordion['the_details']['details'];
                                $sizes_array = $single_product_accordion['sizes_repeater'];
                                $colours_array = $single_product_accordion['colour_repeater'];
                                ?>

                                <ul class="single-product__info">
                                    <li><label class="single-product__info--lbl">The details</label></li>
                                    <li><label class="single-product__info--lbl">Sizes</label></li>
                                    <li><label class="single-product__info--lbl">Colours</label></li>
                                </ul>

                            </div>


                        </div>
                    </div>

                <!-- Single Product Right Col -->

			</div>
		</div>
	</section>


    <!--- Dresses in this collection -->
    <?php
        $products = wc_get_products(array(
	        'category' => array('demetrios-collection'),
        ));

	$category_ids = get_posts( array(
		'post_type' => 'product',
		'numberposts' => -1,
		'post_status' => 'publish',
		'fields' => 'ids',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => 'demetrios-collection', /*category name*/
				'operator' => 'IN',
			)
		),
	));



    ?>
    <section class="single-product__collection">
            <div class="container">
                <div class="row">
                    <h3 class="single-product__collection--header">Other dresses in this collection</h3>
                 <?php
	                    foreach($category_ids as $cat_id) {
		                    $single_product = wc_get_product($cat_id);
		                    $single_product_name = $single_product->name;
		                    $single_product_image_url = $single_product->get_image_id();
		                    $single_product_url = $single_product->get_permalink();
		                    $single_product_img = wp_get_attachment_url( $single_product_image_url, 'full' );
		                    ?>
                            <div class="col-md-4 col-xs-12 single-product__collection--col">
                                <div class="single-product__collection--img" style="background-image: url(<?php echo $single_product_img; ?>);">
                                    <h4 class="single-product__collection--title"><?php echo $single_product_name; ?></h4>
                                </div>
                                <a href="<?php echo $single_product_url; ?>" class="single-product__collection--link">View Product</a>
                            </div>
                            <?php
	                    }
                    ?>
            </div>
        </div>
    </section>
    <!-- Dresses in this collection -->


    <div id="single_product__modaal" class="single_product__modaal" style="display: none;">
        <div class="row">
            <div class="container">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>

	<div class="row">
		<div class="container">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
<!--				--><?php //wc_get_template_part( 'content', 'single-product' ); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

    <section class="sposa-brides">
        <div class="container">
			<?php
				$brides = new WP_Query(array (
					'post_type' => 'sposabrides',
					'numberposts', '-1'
				    ));

				if (is_array($brides->posts)) {

				    $bridePosts = $brides->posts;
			?>
            <div class="row">
                <div class="bridal-accessories__topRow sposa__topRow">
                    <div class="col-md-12">
                        <div class="bridal-accessories__topRow--wrapper sposa__topRow--wrapper">
                            <h2 class="bridal-accessories__header sposa__topRow__header">Sposa Brides</h2>
                            <div class="bridal-accessories__topRow--line sposa__topRow--line"></div>
                            <a href="/events" class="bridal-accessories__topRow--link sposa__topRow--link">View Brides</a>
                        </div>
                    </div>
                </div>
				<?php
					foreach($bridePosts as $bride) {

						$bride_image = get_the_post_thumbnail_url($bride->ID, 'full');
						$bride_name = get_field("bride_name", $bride);
						$bride_url = get_permalink($bride->ID);

						?>

                        <div class="col-md-3">
                            <div class="single-bride">
                                <div class="single-bride__wrapper">

                                    <div class="single-bride__image" style="background: url(<?php echo $bride_image ?>);">
                                    </div>

                                    <img src="<?php echo $bride_image; ?>" class="single-bride__img" />

	                                <a href="<?php echo $bride_url; ?>" style="text-decoration: none; color: #000000;">
		                                <label class="single-bride__title">
			                                <span><?php echo $bride_name; ?></span>
		                                </label>
	                                </a>


                                </div>
                            </div>
                        </div>
						<?php
					}
					}
				?>
            </div>
        </div>


    </section>
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->


	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
//		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
//		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
