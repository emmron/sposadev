<section class="intagram">
	<div class="instagram__slider">
		<?php if ( have_rows( 'theme_settings', 'option' ) ) : ?>
		<?php while ( have_rows( 'theme_settings', 'option' ) ) : the_row(); ?>
			<?php $instagram_gallery_images = get_sub_field( 'instagram_gallery' ); ?>
			<?php if ( $instagram_gallery_images ) :  ?>
				<?php foreach ( $instagram_gallery_images as $instagram_gallery_image ): ?>
						<?php $instagram_image = esc_url( $instagram_gallery_image['url'] ); ?>
      
						<div class="instagram__slider--img" style="background-image: url(<?php echo $instagram_image; ?>)">
                        </div>
					
                    <?php endforeach; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
    <div class="instagram__follow">
        <a href="https://www.instagram.com/thesposagroupaustralia/?hl=en" target="_blank" class="instagram__follow--link">Follow Us on Instagram</a>
    </div>
    
</section>
