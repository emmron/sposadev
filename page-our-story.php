<?php
/**
 *
 * Template Name: Our Story
 *
 */

get_header();
?>

	<main id="primary" class="site-main our-story">
		<?php if ( have_rows( 'our_story_content' ) ) : ?>
			<?php while ( have_rows( 'our_story_content' ) ) : the_row(); ?>
				<?php if ( get_sub_field( 'hero_background_image' ) ) : ?>
                    <?php $ourStory__heroImg = get_sub_field('hero_background_image'); ?>
                    <?php $heroHeader = get_sub_field("hero_header"); ?>
					<?php $herotext = get_sub_field("hero_text"); ?>
                    <?php
                    $row1header = get_sub_field('row1header');
                    $row1subheader = get_sub_field('row1subheader');
                    $row1image = get_sub_field("row1image");
?>

				<?php endif ?>
			<?php endwhile; ?>
		<?php endif; ?>
        <section class="our-story__hero" style="background-image: url(<?php echo $ourStory__heroImg; ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 our-story__hero--imgCol" >
                    <h2 class="our-story__hero--header"><?php echo $heroHeader; ?></h2>
                        <p class="our-story__hero--text"><?php echo $herotext; ?></p>
                        <a href="/contact-us" class="our-story__hero--link">Our boutiques</a>
                        <a href="/faqs" class="our-story__hero--link">FAQS</a>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section class="our-story__row--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        
                        <div class="our-story__row--1__img" style="background-image: url(<?php echo $row1image;
                        
                        ?>)">
                        
                        </div>
                    
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="our-story__row--1__content">
                            <h2 class="our-story__row--1__header"><?php echo $row1header; ?></h2>
                            <h3 class="our-story__row--1__subheader"><?php echo $row1subheader; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->

<?php
get_footer();
