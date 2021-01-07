<?php
	/*
  * Template Name: Events page
  *
  */

	function sposa_get_events() {
		$events = new WP_Query(array('post_type' => 'sposa-events', 'numberposts', '-1'));
		if (is_array($events->posts)) {
			$eventPosts = $events->posts;
			?>
            <div class="sposa-events">
                <div class="container">
                    <div class="row">
						<?php
							foreach ($eventPosts as $singleEvent) {

							    $event_title = $singleEvent->post_title;
								$event_date = get_field("event_date_time", $singleEvent->ID);
								$event_featured_image = get_field("event_featured_image", $singleEvent->ID);
								$event_description = get_field("event_description", $singleEvent->ID);
								$event_link = get_permalink($singleEvent->ID);
								?>

                                <div class="col-md-6">


                                    <div class="sposa-event">
                                        <div class="sposa-event__wrapper">
                                            <div class="sposa-event__image"
                                                 style="background-image: url(<?php echo $event_featured_image; ?>)">
                                            </div>
                                            <div class="sposa-event__details">
                                                <h2 class="sposa-event__name"><?php echo $event_title; ?></h2>
                                                <label class="sposa-event__date"><span><?php echo $event_date; ?></span></label>
                                                <p><?php echo $event_description; ?></p>
                                            </div>
                                            <a href="<?php echo $event_link; ?>" class="sposa-event__link">
                                                Read More
                                            </a>
                                        </div>
                                    </div>


                                </div>
								<?php
							}
						?>
                    </div>
                </div>
            </div>
			<?php
		}
    }
    //hi
	get_header();
?>

    <!-- Page Banner -->

        <?php get_template_part( 'template-parts/page-banner/page', 'banner' ); ?>

    <!-- End Page Banner -->

    <main id="primary" class="site-main">

        <div class="sposa-events__wrapper">

            <!-- Get Events -->
	            <?php sposa_get_events(); ?>
            <!-- Get Events -->

        </div>
    </main><!-- #main -->
    <!-- Instagram Slider -->

<?php get_template_part( 'template-parts/instagram-slider/instagram', 'slider' ); ?>

    <!-- End Instagram Slider -->

<?php
	get_footer();
