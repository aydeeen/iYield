<?php
// phpcs:ignoreFile

/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); 

$page_404_image       = get_field( 'page_404_image', 'option' ) ?: false;
$page_404_title       = get_field( 'page_404_title', 'option' ) ?: false;
$page_404_description = get_field( 'page_404_description', 'option' ) ?: false;
$page_404_link        = get_field( 'page_404_link', 'option' ) ?: false;
$page_404_link_text   = get_field( 'page_404_link_text', 'option' ) ?: false;
$page_404_link_icon   = get_field( 'page_404_link_icon', 'option' ) ?: false;
$footer_logo          = get_field( 'footer_logo', 'option' ) ?: false;
$footer_tagline       = get_field( 'footer_tagline', 'option' ) ?: false;
?>

<div class="main-container main-container--full-width">
	<div class="main-grid">
		<main class="main-content">
	      <div class="cell">
            <section class="section section--full error404__section">
               <div class="section__inner grid-x grid-padding-x grid-padding-y">
                  <div class="cell">
                     <div>
                        <?php echo wp_get_attachment_image( $page_404_image, 'full', false ); ?>
                        <h1><?php echo esc_html( $page_404_title ); ?></h1>
                        <p><?php echo wp_kses_post( $page_404_description ); ?></p>
                        <a href="<?php echo esc_url( $page_404_link ); ?>">
                           <?php echo $page_404_link_icon; ?>
                           <?php echo esc_html( $page_404_link_text ); ?>
                        </a>   
                     </div>
                  </div>
               </div>
            </section>
		   </div>
		</main>
	</div>
</div>

<?php
get_footer();
