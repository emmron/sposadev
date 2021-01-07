<?php
	
	function output_testimonials() {
		$args = array(
			'post_type'                   => 'testimonials',
		);
		
		$query = new WP_Query( $args );
		
		if ( $query->posts ) {
			
			$testimonials = $query->posts;
			
			foreach($testimonials as $testimonial) {
				$testimonialID = $testimonial->ID;
				$testimonialContent = get_field("testimonial", $testimonialID);
				$testimonialBranchVisited = get_field("testimonial_branch_visited", $testimonialID);
				$testimonialName = get_field("testimonial_name", $testimonialID);
				?>
				
				<div class="testimonial__slider--slide">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="testimonial__slider--slide__content">
									<p><?php echo $testimonialContent; ?></p>
								</div>
								<div class="testimonial__slider--slide__name">
									<label><?php echo $testimonialName; ?></label>
								</div>
								<div class="testimonial__slider--slide__branchVisited">
									<label><?php echo $testimonialBranchVisited; ?></label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
		wp_reset_postdata();
	}
?>


<section class="testimonial">
	<div class="testimonial__slider">
		<?php output_testimonials(); ?>
	</div>
</section>
