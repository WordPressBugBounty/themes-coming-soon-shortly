<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coming Soon Shortly
 */

?>

<footer class="footer-side">
  <?php if( get_theme_mod( 'coming_soon_shortly_show_footer_widget',true)) : ?>
    <div class="footer-widget">
      <div class="container">
        <?php
          // Check if any footer sidebar is active
          $coming_soon_shortly_any_sidebar_active = false;
          for ( $coming_soon_shortly_i = 1; $coming_soon_shortly_i <= 4; $coming_soon_shortly_i++ ) {
            if ( is_active_sidebar( "footer{$coming_soon_shortly_i}-sidebar" ) ) {
              $coming_soon_shortly_any_sidebar_active = true;
              break;
            }
          }
          // Count active for responsive column classes
          $coming_soon_shortly_active_sidebars = 0;
          if ( $coming_soon_shortly_any_sidebar_active ) {
            for ( $coming_soon_shortly_i = 1; $coming_soon_shortly_i <= 4; $coming_soon_shortly_i++ ) {
              if ( is_active_sidebar( "footer{$coming_soon_shortly_i}-sidebar" ) ) {
                $coming_soon_shortly_active_sidebars++;
              }
            }
          }
          $coming_soon_shortly_col_class = $coming_soon_shortly_active_sidebars > 0 ? 'col-lg-' . (12 / $coming_soon_shortly_active_sidebars) . ' col-md-6 col-sm-12' : 'col-lg-3 col-md-6 col-sm-12';
        ?>
        <div class="row pt-2">
          <?php for ( $coming_soon_shortly_i = 1; $coming_soon_shortly_i <= 4; $coming_soon_shortly_i++ ) : ?>
            <div class="footer-area <?php echo esc_attr($coming_soon_shortly_col_class); ?>">
              <?php if ( $coming_soon_shortly_any_sidebar_active && is_active_sidebar("footer{$coming_soon_shortly_i}-sidebar") ) : ?>
                <?php dynamic_sidebar("footer{$coming_soon_shortly_i}-sidebar"); ?>
              <?php elseif ( ! $coming_soon_shortly_any_sidebar_active ) : ?>
                  <?php if ( $coming_soon_shortly_i === 1 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer1', 'coming-soon-shortly' ); ?>" id="Search" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Search', 'coming-soon-shortly' ); ?></h4>
                      <?php get_search_form(); ?>
                    </aside>

                  <?php elseif ( $coming_soon_shortly_i === 2 ) : ?>
                      <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer2', 'coming-soon-shortly' ); ?>" id="archives" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Archives', 'coming-soon-shortly' ); ?></h4>
                      <ul>
                          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                      </ul>
                      </aside>
                  <?php elseif ( $coming_soon_shortly_i === 3 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer3', 'coming-soon-shortly' ); ?>" id="meta" class="sidebar-widget">
                      <h4 class="title"><?php esc_html_e( 'Meta', 'coming-soon-shortly' ); ?></h4>
                      <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                      </ul>
                    </aside>
                  <?php elseif ( $coming_soon_shortly_i === 4 ) : ?>
                    <aside role="complementary" aria-label="<?php echo esc_attr__( 'footer4', 'coming-soon-shortly' ); ?>" id="categories" class="sidebar-widget">
                      <h4 class="title" ><?php esc_html_e( 'Categories', 'coming-soon-shortly' ); ?></h4>
                      <ul>
                          <?php wp_list_categories('title_li=');  ?>
                      </ul>
                    </aside>
                  <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if( get_theme_mod( 'coming_soon_shortly_show_footer_copyright',true)) : ?>
    <div class="footer-copyright">
      <div class="container">
        <div class="row pt-2">
          <div class="col-lg-6 col-md-6 align-self-center">
            <p class="mb-0 py-3 text-center text-md-start">
              <?php
                if (!get_theme_mod('coming_soon_shortly_footer_text') ) { ?>   
                  <a href="<?php echo esc_url(__('https://www.wpelemento.com/products/free-coming-soon-wordpress-theme', 'coming-soon-shortly' )); ?>" target="_blank">  
                    <?php esc_html_e('Coming Soon Shortly WordPress Theme','coming-soon-shortly'); ?>
                  </a>
                <?php } else {
                  echo esc_html(get_theme_mod('coming_soon_shortly_footer_text'));
                }
              ?>
              <?php if ( get_theme_mod('coming_soon_shortly_copyright_enable', true) == true ) : ?>
              <?php
                /* translators: %s: WP Elemento */
                printf( esc_html__( ' By %s', 'coming-soon-shortly' ), 'WP Elemento' ); ?>
              <?php endif; ?>
            </p>
          </div>
          <div class="col-lg-6 col-md-6 align-self-center text-center text-md-end">
            <?php if ( get_theme_mod('coming_soon_shortly_copyright_enable', true) == true ) : ?>
              <a href="<?php echo esc_url(__('https://wordpress.org','coming-soon-shortly') ); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'coming-soon-shortly' ), 'WordPress' ); ?></a>
            <?php endif; ?>
          </div>
        </div>
        <?php if(get_theme_mod('coming_soon_shortly_footer_social_icon_hide', false )== true){ ?>
          <div class="row">
            <div class="col-12 align-self-center py-1">
              <div class="footer-links">
                <?php $coming_soon_shortly_settings_footer = get_theme_mod( 'coming_soon_shortly_social_links_settings_footer' ); ?>
                <?php if ( is_array($coming_soon_shortly_settings_footer) || is_object($coming_soon_shortly_settings_footer) ){ ?>
                  <?php foreach( $coming_soon_shortly_settings_footer as $coming_soon_shortly_setting_footer ) { ?>
                    <a href="<?php echo esc_url( $coming_soon_shortly_setting_footer['link_url'] ); ?>" target="_blank">
                      <i class="<?php echo esc_attr( $coming_soon_shortly_setting_footer['link_text'] ); ?> me-2"></i>
                    </a>
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if ( get_theme_mod('coming_soon_shortly_scroll_enable_setting')) : ?>
    <div class="scroll-up">
      <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
    </div>
  <?php endif; ?>
  <?php if(get_theme_mod('coming_soon_shortly_progress_bar', true )== true): ?>
    <div id="elemento-progress-bar" class="theme-progress-bar <?php if( get_theme_mod( 'coming_soon_shortly_progress_bar_position','top') == 'top') { ?> top <?php } else { ?> bottom <?php } ?>"></div>
  <?php endif; ?>
  <?php if(get_theme_mod('coming_soon_shortly_cursor_outline', false )== true): ?>
			<!-- Custom cursor -->
			<div class="cursor-point-outline"></div>
			<div class="cursor-point"></div>
			<!-- .Custom cursor -->
  <?php endif; ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>