<?php
	/**
     *
	 * Template Name: Sposa Brides
     *
     *
	 */
	
	get_header();
?>

    <main id="primary" class="site-main">
	
	
	    <?php if ( have_rows( 'sposa_brides_content' ) ) : ?>
		    <?php while ( have_rows( 'sposa_brides_content' ) ) : the_row(); ?>
			      <?php
                
                $hero__backgroundimg = get_sub_field('hero_image');
			    $hero__header = get_sub_field('heading');
			    $hero__subheader = get_sub_field('subheading');
			    $hero__text = get_sub_field('text');
			    $hero__link = get_sub_field('link');
			    $hero__link__url = $hero__link['url'];
			    $hero__link__url__title = $hero__link['title'];
			    
			
			
			    ?>
		    <?php endwhile; ?>
	    <?php endif ?>

        <section class="sposa-brides__hero">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="sposa-brides__hero--contentCol">
                              <h1 class="sposa-brides__hero--contentCol__header">
                                  <?php echo $hero__header; ?>
                              </h1>
                            
                            <div class="sposa-brides__hero--contentCol__divider">
                            
                            </div>

                            <h2 class="sposa-brides__hero--contentCol__subheader">
		                        <?php echo $hero__subheader; ?>
                            </h2>
                            
                            <p class="sposa-brides__hero--contentCol__text">
                                <?php echo $hero__text; ?>
                            </p>
                            
                            <a href="#" class="sposa-brides__hero--contentCol__link">Share your story</a>
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="sposa-brides__hero--imageCol" style="background-image: url(<?php echo $hero__backgroundimg; ?>)">
                        
                        </div>

                    </div>
                
                </div>
            </div>
        </section>
        
        
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
		            <?php
			            foreach($bridePosts as $bride) {
			             
				            $bride_image = get_the_post_thumbnail_url($bride->ID, 'full');
				            $bride_name = get_field("bride_name", $bride);
				            $bride_link = get_the_permalink($bride->ID);
                
				            ?>
                            <div class="col-md-3">
                                <div class="single-bride">
                                    <div class="single-bride__wrapper">
                                        
                                        <div class="single-bride__image" style="background: url(<?php echo $bride_image ?>);">
                                        </div>
                                        
                                        <img src="<?php echo $bride_image; ?>" class="single-bride__img" />
                                        
                                        <a href="<?php echo $bride_link; ?>" style="text-decoration: none; color: #000000;">
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
    </main><!-- #main -->
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->

<?php
	get_footer();
