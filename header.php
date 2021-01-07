<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package _s
	 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', '_s'); ?></a>

    <header id="masthead" class="site-header">

        <div class="site-branding">

            <div class="site-branding__search col">
				<?php echo get_search_form(); ?>
            </div>

            <div class="site-branding__logo col">
                <a href="<?php echo get_home_url(); ?>">
					<?php if (have_rows('theme_settings', 'option')) : ?>
						<?php while (have_rows('theme_settings', 'option')) : the_row(); ?>
							<?php $logo = get_sub_field('logo'); ?>
							<?php if ($logo) : ?>
                                <img src="<?php echo esc_url($logo['url']); ?>"
                                     alt="<?php echo esc_attr($logo['alt']); ?>"/>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
                </a>
            </div>

            <div class="site-branding__account-menu col">
                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
                   title="<?php _e('My Account', ''); ?>"><?php _e('My Account', ''); ?></a>
            </div>

        </div><!-- .site-branding -->

        <div class="mobile-header">

            <div class="mobile-header__menu">
            </div>
            
            <?php $frontpageurl = get_home_url(); ?>
            
                <a href="<?php echo $frontpageurl; ?>" class="mobile-header__logo">
                </a>
          

            <div class="mobile-header__search">
            </div>

        </div>

        <div class="site-header__bottom">

            <!-- Location Select -->
            <div class="site-header__bottom--loc">
                <div class="site-header__bottom--loc__wrapper">
                    <select class="site-header__bottom--loc__select">
                        <option>Melbourne</option>
                        <option>Canberra</option>
                        <option>Sydney</option>
                        <option>Perth</option>
                    </select>
                </div>
            </div>
            <!-- Location Select -->

            <!-- Nav -->
            <nav id="site-navigation" class="main-navigation site-branding__nav">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e('Primary Menu', '_s'); ?></button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);
				?>
            </nav><!-- #site-navigation -->
            <!-- Nav -->

            <!-- Book Appointment -->
            <div class="site-header__bottom--bookAppt">
                <a href="/book-an-appointment">Book Appointment</a>
            </div>


        </div>


        <!-- Boook Appointment -->


    </header><!-- #masthead -->

    <section class="sposa-mega-menus">

        <div class="mega-menu">
            <!-- Accessories Mega Menu -->
                <div class="accessories">
                <div class="container">
                    <div class="row">
                        <div class="accessories__wrapper">
	                        <?php if ( have_rows( 'theme_settings', 'option' ) ) : ?>
		                        <?php while ( have_rows( 'theme_settings', 'option' ) ) : the_row(); ?>
			                        <?php $accessories_mega_menu_categories = get_sub_field( 'accessories_mega_menu_categories' ); ?>
			                        <?php if ( $accessories_mega_menu_categories ) : ?>
				                        <?php $get_terms_args = array(
					                        'taxonomy' => 'product_cat',
					                        'hide_empty' => 0,
					                        'include' => $accessories_mega_menu_categories,
				                        ); ?>
				                        <?php $terms = get_terms( $get_terms_args ); ?>
				                        <?php if ( $terms ) : ?>
					                        <?php foreach ( $terms as $term ) : ?>
						                        <?php
						
						                        $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
						                        $image = wp_get_attachment_url( $thumbnail_id );
						
						                        ?>
                                                <div class="accessories__catBlock">
                                                    <div class="accessories__catImg" style="background-image: url(<?php echo $image; ?>)">
                                                    </div>

                                                    <a class="accessories__link" href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
                                                </div>
					
					                        <?php endforeach; ?>
				                        <?php endif; ?>
			                        <?php endif; ?>
		                        <?php endwhile; ?>
	                        <?php endif; ?>
                        </div>
                    
	   
                    </div>
              
                </div>
                    <a href="#" class="acccessories__viewAllLink">
                        VIEW ALL COLLECTIONS
                    </a>


            </div>
            <!-- Accessories Mega Menu -->
        </div>
        

    </section>
    
    <section class="sposa-mobile-menu">
        <div class="sposa-mobile-menu__close"></div>
        
        <div class="sposa-mobile-menu__nav">
	        <?php
		        wp_nav_menu( array(
			        'menu'           => 'Main Menu', // Do not fall back to first non-empty menu.
			        'theme_location' => '__no_such_location',
			        'fallback_cb'    => false // Do not fall back to wp_page_menu()
		        ) );
	
	        ?>
        </div>
        
        <div class="sposa-mobile-menu__link">
            <a href="/book-an-appointment" class="sposa-mobile-menu__link--href">Book an appointment</a>
        </div>
        
        <div class="sposa-mobile-menu__nav legal">
	        <?php
		        wp_nav_menu( array(
			        'menu'           => 'Mobile Legal Menu', // Do not fall back to first non-empty menu.
			        'theme_location' => '__no_such_location',
			        'fallback_cb'    => false // Do not fall back to wp_page_menu()
		        ) );
	
	        ?>
        </div>
  
        
        
        
    </section>
