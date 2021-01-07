<section class="bridal-accessories sposa">
    <div class="container">
        <div class="row">
            <div class="bridal-accessories__wrapper">
                <div class="bridal-accessories__topRow sposa__topRow">
                    <div class="col-md-12">
                        <div class="bridal-accessories__topRow--wrapper sposa__topRow--wrapper">
                            <h2 class="bridal-accessories__header sposa__topRow__header">Bridal Accessories</h2>
                            <div class="bridal-accessories__topRow--line sposa__topRow--line"></div>
                            <a href="/events" class="bridal-accessories__topRow--link sposa__topRow--link">View all accessories</a>
                        </div>
                    </div>
                </div>
	            <?php if ( have_rows( 'home_content' ) ) : ?>
		            <?php while ( have_rows( 'home_content' ) ) : the_row(); ?>
			            <?php $bridal_accessories_categories = get_sub_field( 'bridal_accessories_categories' ); ?>
			            <?php if ( $bridal_accessories_categories ) : ?>
				            <?php foreach ( $bridal_accessories_categories as $term ) : ?>
					            <?php
					            $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
					            $image = wp_get_attachment_url( $thumbnail_id );
					            ?>
                                <div class="col-md-3 col-xs-12">
                                    <div class="bridal-accessories__single" style="background-image: url('<?php echo $image; ?>')">
                                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
                                    </div>
                                </div>
				            <?php endforeach; ?>
			            <?php endif; ?>
		            <?php endwhile; ?>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
