<?php
// phpcs:ignoreFile

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$header_logo          = get_field( 'header_logo', 'option' ) ?: false;
$header_button_1      = get_field( 'header_button_1', 'option' ) ?: false;
$header_button_1_icon = get_field( 'header_button_1_icon', 'option' ) ?: false;
$header_button_1_text = get_field( 'header_button_1_text', 'option' ) ?: false;
$header_button_2      = get_field( 'header_button_2', 'option' ) ?: false;
$header_button_2_icon = get_field( 'header_button_2_icon', 'option' ) ?: false;
$header_button_2_text = get_field( 'header_button_2_text', 'option' ) ?: false;
$footer_copyright     = get_field( 'footer_copyright', 'option' ) ?: false;
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php if ( get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

<header class="section section--full site-header" role="banner">
   <div class="section__inner grid-x grid-padding-x grid-padding-y site-header__grid">
      <div class="cell">

         <div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
            <div class="title-bar-left">
               <button aria-label="<?php esc_html_e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header__logo">
                  <?php echo wp_get_attachment_image( $header_logo, 'full', false ); ?>
               </a>
               <a href="<?php echo esc_url( $header_button_1 ); ?>" target="_blank" class="site-header__mobile-signup-link">
                  <svg width="30" height="30" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M3.6 4.8C3.6 3.52696 4.10571 2.30606 5.00589 1.40589C5.90606 0.505713 7.12696 0 8.4 0C9.67304 0 10.8939 0.505713 11.7941 1.40589C12.6943 2.30606 13.2 3.52696 13.2 4.8C13.2 6.07304 12.6943 7.29394 11.7941 8.19411C10.8939 9.09429 9.67304 9.6 8.4 9.6C7.12696 9.6 5.90606 9.09429 5.00589 8.19411C4.10571 7.29394 3.6 6.07304 3.6 4.8ZM0 18.0863C0 14.3925 2.9925 11.4 6.68625 11.4H10.1138C13.8075 11.4 16.8 14.3925 16.8 18.0863C16.8 18.7013 16.3013 19.2 15.6862 19.2H1.11375C0.49875 19.2 0 18.7013 0 18.0863ZM18.9 11.7V9.3H16.5C16.0013 9.3 15.6 8.89875 15.6 8.4C15.6 7.90125 16.0013 7.5 16.5 7.5H18.9V5.1C18.9 4.60125 19.3013 4.2 19.8 4.2C20.2987 4.2 20.7 4.60125 20.7 5.1V7.5H23.1C23.5988 7.5 24 7.90125 24 8.4C24 8.89875 23.5988 9.3 23.1 9.3H20.7V11.7C20.7 12.1988 20.2987 12.6 19.8 12.6C19.3013 12.6 18.9 12.1988 18.9 11.7Z" fill="#889EBE"/>
                  </svg>
               </a>
            </div>
         </div>

         <nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
            <div class="top-bar-left">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header__logo">
                  <?php echo wp_get_attachment_image( $header_logo, 'full', false ); ?>
               </a>
            </div>
            <div class="top-bar-right">
               <?php foundationpress_top_bar_r(); ?>
               <?php if ( ! get_theme_mod( 'foundationpress_mobile_menu_layout' ) || get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'topbar' ) : ?>
                  <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
               <?php endif; ?>
               <div class="site-header__buttons-wrapper site-header__buttons-wrapper-mobile">
                  <div class="site-header__button-wrapper site-header__button-wrapper--1">
                     <a href="<?php echo esc_url( $header_button_1 ); ?>" class="button" target="_blank">
                        <?php echo wp_kses_post( $header_button_1_icon ); ?>
                        <?php echo esc_html( $header_button_1_text ); ?>
                     </a>
                  </div>
                  <div class="site-header__button-wrapper">
                     <a href="<?php echo esc_url( $header_button_2 ); ?>" class="button" target="_blank">
                        <?php echo wp_kses_post( $header_button_2_icon ); ?>
                        <?php echo esc_html( $header_button_2_text ); ?>
                     </a>
                  </div>
               </div>
            </div>
            <div class="site-header__buttons-wrapper">
               <div class="site-header__button-wrapper site-header__button-wrapper--1">
                  <a href="<?php echo esc_url( $header_button_1 ); ?>" class="button" target="_blank">
                     <?php echo wp_kses_post( $header_button_1_icon ); ?>
                     <?php echo esc_html( $header_button_1_text ); ?>
                  </a>
               </div>
               <div class="site-header__button-wrapper">
                  <?php $param_1 = do_shortcode('[urlparam param="utm_source"]'); ?>
                  <?php $param_2 = do_shortcode('[urlparam param="utm_campaign"]'); ?>
                  <?php $link_with_params = "{$header_button_2}?utm_source={$param_1}&utm_campaign={$param_2}" ?>

                     <a href="<?php echo esc_url( $header_button_2 ); ?>" class="button" target="_blank">
                        <?php echo wp_kses_post( $header_button_2_icon ); ?>
                        <?php echo esc_html( $header_button_2_text ); ?>
                     </a>
               </div>
            </div>

            <footer class="section section--full footer footer in-hamb-meni">
               <div class="section__inner grid-x grid-padding-x grid-padding-y footer__grid">
                  <div class="cell">
                     <div class="footer__navigation">
                        <?php if ( have_rows( 'footer_navigation', 'option' ) ): ?>
                           <?php while ( have_rows( 'footer_navigation', 'option' ) ): the_row();
                                 $link            = get_sub_field( 'link' ) ?: false;
                                 $label           = get_sub_field( 'label' ) ?: false;
                                 $icon            = get_sub_field( 'icon' ) ?: false;
                                 $open_in_new_tab = get_sub_field( 'open_in_new_tab' ) ?: false;
                                 ?>
                                    <a href="<?php echo esc_url( $link ); ?>" <?php if ($open_in_new_tab && in_array ( "Yes", $open_in_new_tab )) echo 'target="_blank"'; ?> >
                                       <?php echo wp_get_attachment_image( $icon, 'full', false ); ?>
                                       <?php echo esc_html( $label ); ?>
                                    </a>
                           <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                  </div>
                  <div class="cell">
                     <div class="footer__bottom">
                        <p class="copyright"><?php echo esc_html( $footer_copyright ); ?></p>
                        <div class="socials">
                           <?php if ( have_rows( 'footer_socials', 'option' ) ): ?>
                              <?php while ( have_rows( 'footer_socials', 'option' ) ): the_row();
                                 $link = get_sub_field( 'link' ) ?: false;
                                 $icon = get_sub_field( 'icon' ) ?: false;
                                 ?>
                                    <a href="<?php echo esc_url( $link ); ?>" target="_blank">
                                       <?php echo wp_kses_post( $icon ); ?>
                                    </a>
                              <?php endwhile; ?>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
	            </div>
            </footer>
         </nav>
      </div>
   </div>
</header>