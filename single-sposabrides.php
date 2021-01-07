<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();


		
		endwhile; // End of the loop.
		?>


<?php if ( have_rows( 'sposa_bride_content' ) ) : ?>
	<?php while ( have_rows( 'sposa_bride_content' ) ) : the_row(); ?>
		        <?php
            $header = get_sub_field('header');
            $wedding_date = get_sub_field('date');
            $text = get_sub_field('text');
            $how_meet_text = get_sub_field('how_meet_text');
            $proposal_text = get_sub_field('proposal_text');
            $wedding_dress_text = get_sub_field('wedding_dress_text');
            $highlight_text = get_sub_field('highlight_text');
		$image_gallery_images = get_sub_field( 'image_gallery' );
		?>
        <section class="sposa-bride">
            
            <section class="sposa-bride__intro">
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <h2 class="sposa-bride__intro--header"><?php echo $header; ?></h2>
                            <h3 class="sposa-bride__intro--date"><?php echo $wedding_date; ?></h3>
                            <p><?php echo $text; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="sposa-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sposa-bride__gallery">
		                        <?php if ( $image_gallery_images ) :  ?>
			                        <?php foreach ( $image_gallery_images as $image_gallery_image ): ?>
                                        <div class="sposa-bride__gallery__single" style="background-image: url(<?php echo $image_gallery_image['sizes']['large']; ?>);">
                                        </div>
                                        <p><?php echo esc_html( $image_gallery_image['caption'] ); ?></p>
			                        <?php endforeach; ?>
		                        <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
          
            </section>
            
            <section class="sposa-bride__questions">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <?php
                                $how_meet = get_sub_field('how_meet_text');
                                $proposal_text = get_sub_field('proposal_text');
                                $wedding_dress_text = get_sub_field('wedding_dress_text');
                                $highlight_text = get_sub_field('highlight_text');
                                
                            ?>
                            <div class="sposa-bride__content">
                                <h3 class="sposa-bride__question">How did you meet your spouse?</h3>
                                <p class="sposa-bride__answer"><?php echo $how_meet; ?></p>

                                <h3 class="sposa-bride__question">Tell us about your proposal</h3>
                                <p class="sposa-bride__answer"><?php echo $proposal_text; ?></p>
                                <div class="sposa-bride__content--img__wrapper">
                                    <div class="sposa-bride__content--img" style="background-image: url(<?php echo get_sub_field('single_image'); ?>"></div>
                                </div>
                                <h3 class="sposa-bride__question">Tell us about your wedding dress.
                                    How was your experience when you were searching for "the one"?</h3>
                                <p class="sposa-bride__answer">
		                            <?php echo $wedding_dress_text; ?>
                                </p>

                                <h3 class="sposa-bride__question">Describe a favourite highlight or two from your wedding day.</h3>

                                    <p class="sposa-bride__answer"><?php echo $highlight_text; ?></p>
                          
                                
                            </div>
                            
                 
                        
                        </div>
                    </div>
                </div>
            </section>
            
            

        </section>
        


	<?php endwhile; ?>
		<?php endif ?>

	</main><!-- #main -->

<?php
get_footer();
