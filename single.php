<?php
// phpcs:ignoreFile

/**
 * The template for displaying all single articles
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 

$subtitle        = get_field( 'subtitle', get_the_id() );
$cta_title       = get_field( 'cta_title', 'option' ) ?: false;
$cta_description = get_field( 'cta_description', 'option' ) ?: false;
$cta_button      = get_field( 'cta_button', 'option' ) ?: false;
$cta_button_text = get_field( 'cta_button_text', 'option' ) ?: false;
$featured_post   = get_field('featured_post', 'option');
$header_logo     = get_field( 'header_logo', 'option' ) ?: false;
$header_button_2 = get_field( 'header_button_2', 'option' ) ?: false;
?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="single-post__post-wrapper single-post__post-wrapper--1">
        <aside class="post-sidebar">
            <div class="post-sidebar__content">
                <div id="sidebar-toc">
                    <h3><?php echo esc_html('TABLE OF CONTENTS') ?></h3>
                    <ul uk-scrollspy-nav="closest: li; offset: 90"></ul>
                </div>
                <div id="sidebar-info">
                    <?php dynamic_sidebar( 'sidebar-widgets' ); ?>
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
        </aside>
        
        <section class="section section--full single-post__post">
            <div class="section__inner grid-x grid-padding-x grid-padding-y">
                <div class="cell">
                    <div>
                        <h1 class="title"><?php the_title(); ?></h1>
                        <h2 class="subtitle"><?php echo esc_html( $subtitle ); ?></h2>
                        <p class="date"><?php echo get_the_date('j M Y'); ?></p>
                        <div class="post-breadcrumbs">
                            <a href="<?php echo esc_url( '/' ); ?>">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1683_25729)">
                                    <path d="M20.4931 10.4047C20.4931 11.0297 19.9722 11.5193 19.3819 11.5193H18.2708L18.2951 17.0818C18.2951 17.1756 18.2882 17.2693 18.2778 17.3631V17.9221C18.2778 18.6895 17.6562 19.311 16.8889 19.311H16.3333C16.2951 19.311 16.2569 19.311 16.2188 19.3075C16.1701 19.311 16.1215 19.311 16.0729 19.311H14.9444H14.1111C13.3438 19.311 12.7222 18.6895 12.7222 17.9221V17.0888V14.8665C12.7222 14.252 12.2257 13.7554 11.6111 13.7554H9.38889C8.77431 13.7554 8.27778 14.252 8.27778 14.8665V17.0888V17.9221C8.27778 18.6895 7.65625 19.311 6.88889 19.311H6.05556H4.94792C4.89583 19.311 4.84375 19.3075 4.79167 19.304C4.75 19.3075 4.70833 19.311 4.66667 19.311H4.11111C3.34375 19.311 2.72222 18.6895 2.72222 17.9221V14.0332C2.72222 14.002 2.72222 13.9672 2.72569 13.936V11.5193H1.61111C0.986111 11.5193 0.5 11.0332 0.5 10.4047C0.5 10.0922 0.604167 9.81445 0.847222 9.5714L9.75 1.81098C9.99306 1.56793 10.2708 1.5332 10.5139 1.5332C10.7569 1.5332 11.0347 1.60265 11.2431 1.77626L20.1111 9.5714C20.3889 9.81445 20.5278 10.0922 20.4931 10.4047Z" fill="#d5dce7"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_1683_25729">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5 0.700195)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </a> 
                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.4213 8.23051L2.34805 14.3037C2.05514 14.5966 1.58027 14.5966 1.28739 14.3037L0.579047 13.5954C0.286641 13.303 0.286079 12.8291 0.577797 12.536L5.39095 7.70016L0.577797 2.86438C0.286079 2.57129 0.286641 2.09738 0.579047 1.80498L1.28739 1.09663C1.5803 0.803727 2.05517 0.803727 2.34805 1.09663L8.42127 7.16985C8.71417 7.46273 8.71417 7.9376 8.4213 8.23051Z" fill="#d5dce7"/>
                            </svg>
                            <a href="<?php echo esc_url( '/blog' ); ?>"><?php esc_html_e( 'Blog', 'foundationpress' ); ?></a>
                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.4213 8.23051L2.34805 14.3037C2.05514 14.5966 1.58027 14.5966 1.28739 14.3037L0.579047 13.5954C0.286641 13.303 0.286079 12.8291 0.577797 12.536L5.39095 7.70016L0.577797 2.86438C0.286079 2.57129 0.286641 2.09738 0.579047 1.80498L1.28739 1.09663C1.5803 0.803727 2.05517 0.803727 2.34805 1.09663L8.42127 7.16985C8.71417 7.46273 8.71417 7.9376 8.4213 8.23051Z" fill="#d5dce7"/>
                            </svg>
                            <span><?php the_title(); ?></span>
                        </div>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="single-post__post-wrapper single-post__post-wrapper--2">
        <aside class="post-sidebar"></aside>
        <section class="section section--full single-post__post">
            <div class="section__inner grid-x grid-padding-x grid-padding-y">
                <div class="cell">
                    <div class="user">
                        <?php $author_id         = get_the_author_meta('ID'); ?>
                        <?php $avatar            = get_field( 'avatar', 'user_'. $author_id ); ?>
                        <?php $author_bio_1_line = get_field( 'author_bio_1_line', 'user_'. $author_id ); ?>
                        <?php $author_bio_2_line = get_field( 'author_bio_2_line', 'user_'. $author_id ); ?>
                        <?php $signature         = get_field( 'signature', 'user_'. $author_id ); ?>

                        <?php echo wp_get_attachment_image( $avatar, 'full', false, ['class' => 'avatar'] ); ?>
                        <div class="author-content">
                            <h3 class="signature"><?php echo esc_html( $signature ); ?></h3>
                            <div class="author-bio">
                                <p><?php echo wp_kses_post( $author_bio_1_line ); ?></p>
                                <p><?php echo wp_kses_post( $author_bio_2_line ); ?></p>
                            </div>                  
                            <hr>
                            <div class="links-wrapper">
                                <?php if ( have_rows( 'social_links', 'user_'. $author_id ) ): ?>
                                    <?php while ( have_rows( 'social_links', 'user_'. $author_id ) ): the_row();
                                    $link = get_sub_field( 'link' ) ?: false;
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $icon = get_sub_field( 'icon' ) ?: false;
                                    ?>
                                        <a href="<?php echo esc_url( $link_url ); ?>" target="_blank" data-tooltip tabindex="1" title="<?php echo esc_html( $link_title); ?>" data-position="top" data-alignment="center">
                                            <?php echo wp_kses_post( $icon ); ?>
                                        </a>                           
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endwhile; ?>

<section class="section section-full single-post__slider">
    <div class="section__inner grid-x grid-padding-x grid-padding-y">
        <div class="cell">
        <h2 class="title"><a href="/blog"><?php echo esc_html( 'All posts' ); ?></a></h2>

        <?php $featured_post   = get_field('featured_post', 'option');
        $featured_post_id = $featured_post ? $featured_post : get_posts(['count' => 1])[0]->ID;
        $args = array(
            'post_type' => 'post',
            'post__in' => array($featured_post_id)
        );
        $featured_post_id = new WP_Query($args);

            
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'post__not_in' => array(get_the_ID(), $featured_post)
            );

            $query = get_posts( $args );       

            if ( have_posts() ): ?>
                <div class="posts-slider"> 
                    <?php if ($featured_post_id->have_posts()) {
                        while ($featured_post_id->have_posts()) {
                            $featured_post_id->the_post(); ?>

                            <div class="carousel-cell posts-slider__carousel-cell">
                            <a href="<?php the_permalink(); ?>" class="box">                        
                                <?php the_post_thumbnail(); ?>
                                <h3><?php the_title() ?></h3>
                            </a>
                        </div>
                        <?php } } ?>

                    <?php foreach ($query as $key => $post) : setup_postdata( $post ) ?>
                        <div class="carousel-cell posts-slider__carousel-cell">
                            <a href="<?php the_permalink(); ?>" class="box">                        
                                <?php the_post_thumbnail(); ?>
                                <h3><?php the_title() ?></h3>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
	    </div>
    </div>
</section>

<section class="section section--full blog__cta">
    <div class="section__inner grid-x grid-padding-x grid-padding-y">
		<div class="cell">
            <div class="text-center"> 
                <h2 class="title"><?php echo wp_kses_post( $cta_title ); ?></h2>
                <p class="description"><?php echo esc_html( $cta_description ); ?></p>
                <div class="button-wrapper">
                    <a href="<?php echo esc_url( $cta_button ); ?>" class="button" target="_blank">
                        <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0347 2.60225C10.6192 2.75803 10.2426 3.08545 9.971 3.57667C9.97424 3.57202 9.9776 3.56738 9.98096 3.5628C9.96404 3.5929 9.9476 3.62365 9.93164 3.65504C9.87512 3.76494 9.83072 3.88336 9.79832 4.00668C9.58928 4.57381 9.65504 5.16378 9.72584 5.66329C9.52988 5.40587 9.31676 5.15869 9.08996 4.92222L9.08816 4.91972C8.03636 3.82866 6.68408 2.96183 5.33875 2.34463C5.40804 2.38709 5.4758 2.43131 5.54205 2.4772C5.47499 2.43232 5.40711 2.38891 5.33853 2.34707C5.32119 2.33898 5.30328 2.33089 5.28536 2.32279C5.26745 2.3147 5.24953 2.30662 5.23219 2.29853C2.95593 1.05527 0.945262 0.456755 0.0180101 0.40332L0.0175781 0.404811C0.0962021 1.4782 0.227998 2.48006 0.516586 3.37816C0.953482 4.73274 1.75559 5.85642 3.28585 6.64928C3.37113 6.69378 3.45939 6.73679 3.54705 6.77951L3.61178 6.81109C3.61409 6.81224 3.61701 6.81317 3.61988 6.81432C3.62277 6.81547 3.62567 6.81662 3.62797 6.81779L3.63077 6.81735L3.62792 6.81995L3.63299 6.82349L3.62571 6.82007C3.6234 6.82007 3.62109 6.82064 3.61878 6.82122C3.61647 6.8218 3.61417 6.82237 3.61185 6.82238L3.61184 6.82021C3.61416 6.82021 3.61647 6.81964 3.61878 6.81906C3.62109 6.81848 3.62341 6.8179 3.62571 6.8179L3.61178 6.81109L3.61184 6.82021L3.59219 6.82354L3.57253 6.827C1.84809 7.25927 1.10145 8.15384 0.907282 9.67024C0.92383 9.65714 0.940474 9.64594 0.957202 9.63629C0.94051 9.64901 0.92389 9.6619 0.907366 9.67498C0.801094 10.5113 0.86107 11.5371 1.01808 12.7798L1.01833 12.7817C1.01833 12.7817 1.02525 12.7817 1.03682 12.7794C1.04144 12.7794 1.04838 12.7794 1.05531 12.7772C1.08315 12.7748 1.12629 12.7698 1.18465 12.7631C1.85039 12.6868 2.51381 12.5134 3.11713 12.2615C3.818 11.9901 4.6116 11.5781 5.36355 10.9556L5.36199 10.9575C5.49235 10.8497 5.62137 10.7358 5.74869 10.615L5.74479 10.6575C5.73957 10.6625 5.73437 10.6671 5.72915 10.6711L5.73737 10.6682L5.72901 10.6737C5.30831 11.0875 5.02398 11.5105 4.80669 11.9543L4.81659 11.9459L4.80896 11.9568C4.58337 12.4194 4.43343 12.9074 4.28382 13.4342L4.28189 13.4382C4.17324 13.8242 4.08771 14.2102 4.0253 14.5894L4.03142 14.5779L4.02752 14.5895C3.93275 15.1605 3.88651 15.7199 3.87727 16.2585C3.87062 16.6271 3.87918 16.9846 3.90067 17.3295C3.90032 17.342 3.90023 17.3541 3.90042 17.3657C3.91891 17.65 3.94664 17.9252 3.98132 18.1887C4.04597 18.6964 4.13442 19.1566 4.2297 19.5554C4.23445 19.5856 4.23789 19.6008 4.23789 19.6008L4.23969 19.5969L4.24021 19.5989L4.24119 19.5935C4.34498 19.363 4.48913 19.1595 4.63781 18.9583C4.64243 18.9513 4.64762 18.9443 4.65283 18.9375C4.65803 18.9305 4.66323 18.9236 4.66785 18.9166C4.79499 18.7432 4.92923 18.5746 5.06792 18.4104C5.30358 18.131 5.55357 17.8601 5.80999 17.5967L5.81307 17.5919L5.81208 17.5968C6.04093 17.3634 6.27671 17.1323 6.5148 16.908C6.554 16.8712 6.5933 16.8341 6.6326 16.7969C6.70896 16.7246 6.78624 16.6515 6.86394 16.5798L6.87023 16.5719L7.10504 16.3532C7.47716 16.0067 7.84832 15.6611 8.207 15.3063L8.2124 15.2985C8.31236 15.1985 8.4122 15.0986 8.50988 14.9964C8.57228 14.934 8.63228 14.867 8.6924 14.8L8.70428 14.7838C9.0716 14.3736 9.42716 13.9007 9.73988 13.4008L9.74936 13.3832L9.74216 13.401C10.112 12.8139 10.4264 12.1898 10.639 11.598C10.9718 10.6832 11.0902 9.82148 11.039 9.01587C11.057 8.82605 11.1574 7.58615 10.8715 6.18257L10.8864 6.18853L10.8805 6.16158L10.8888 6.17948C11.2424 6.31355 11.6354 6.36672 12.0168 6.38521C12.2292 6.3965 13.8477 6.43871 13.9665 6.22704L13.9676 6.22552C13.9699 6.22121 13.9714 6.21636 13.9724 6.21184C13.9707 6.21516 13.9692 6.21756 13.9677 6.21912V6.21649C14.0949 5.10924 13.4314 3.47958 12.7866 2.9456C12.6246 2.81194 12.454 2.70852 12.2793 2.63485C12.2793 2.63485 12.1352 2.56152 11.8855 2.51974C11.7115 2.49064 11.5368 2.48945 11.3654 2.51568C11.153 2.54821 11.1342 2.56494 11.0347 2.60225ZM3.6126 6.83428L3.61185 6.82238C3.61195 6.82619 3.61225 6.83021 3.6126 6.83428Z" fill="white"/>
                        </svg>
                        <?php echo esc_html( $cta_button_text ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
