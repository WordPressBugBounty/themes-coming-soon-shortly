<?php

function get_page_id_by_title($coming_soon_shortly_pagename){
  $coming_soon_shortly_args = array(
 'post_type' => 'page',
 'posts_per_page' => 1,
 'title' => $coming_soon_shortly_pagename
  );
  $coming_soon_shortly_query = new WP_Query( $coming_soon_shortly_args );    $coming_soon_shortly_page_id = '1';
 if (isset($coming_soon_shortly_query->post->ID)) {
      $coming_soon_shortly_page_id = $coming_soon_shortly_query->post->ID;
  } return $coming_soon_shortly_page_id;
}
//about theme info
add_action( 'admin_menu', 'coming_soon_shortly_gettingstarted' );
function coming_soon_shortly_gettingstarted() {
	add_theme_page( esc_html__('Coming Soon Shortly', 'coming-soon-shortly'), esc_html__('Coming Soon Shortly', 'coming-soon-shortly'), 'edit_theme_options', 'coming_soon_shortly_about', 'coming_soon_shortly_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function coming_soon_shortly_admin_theme_style() {
	wp_enqueue_style('coming-soon-shortly-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('coming-soon-shortly-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	// Admin notice code START
	wp_register_script('coming-soon-shortly-notice', esc_url(get_template_directory_uri()) . '/includes/getstart/js/notice.js', array('jquery'), time(), true);
	wp_enqueue_script('coming-soon-shortly-notice');
	// Admin notice code END
}
add_action('admin_enqueue_scripts', 'coming_soon_shortly_admin_theme_style');

// Changelog
if ( ! defined( 'COMING_SOON_SHORTLY_CHANGELOG_URL' ) ) {
    define( 'COMING_SOON_SHORTLY_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function coming_soon_shortly_changelog_screen() {
	global $wp_filesystem;
	$coming_soon_shortly_changelog_file = apply_filters( 'coming_soon_shortly_changelog_file', COMING_SOON_SHORTLY_CHANGELOG_URL );

	if ( $coming_soon_shortly_changelog_file && is_readable( $coming_soon_shortly_changelog_file ) ) {
		WP_Filesystem();
		$coming_soon_shortly_changelog = $wp_filesystem->get_contents( $coming_soon_shortly_changelog_file );
		$coming_soon_shortly_changelog_list = coming_soon_shortly_parse_changelog( $coming_soon_shortly_changelog );

		
		echo '<div id="coming-soon-shortly-changelog-container">';
		echo wp_kses_post( $coming_soon_shortly_changelog_list );
		echo '</div>';
		echo '<button id="coming-soon-shortly-load-more" class="button button-primary" style="margin-top:15px;">Load More</button>';
	}
}

function coming_soon_shortly_parse_changelog( $coming_soon_shortly_content ) {
	$coming_soon_shortly_content = explode ( '== ', $coming_soon_shortly_content );
	$coming_soon_shortly_changelog_isolated = '';

	foreach ( $coming_soon_shortly_content as $key => $coming_soon_shortly_value ) {
		if ( strpos( $coming_soon_shortly_value, 'Changelog ==' ) === 0 ) {
	    	$coming_soon_shortly_changelog_isolated = str_replace( 'Changelog ==', '', $coming_soon_shortly_value );
	    }
	}

	$coming_soon_shortly_changelog_array = explode( '= ', $coming_soon_shortly_changelog_isolated );
	unset( $coming_soon_shortly_changelog_array[0] );

	$coming_soon_shortly_changelog = '<div class="changelog">';
	foreach ( $coming_soon_shortly_changelog_array as $coming_soon_shortly_value ) {
		$coming_soon_shortly_value = preg_replace( '/\n+/', '</span><span>', $coming_soon_shortly_value );
		$coming_soon_shortly_value = '<div class="block-changelog"><span class="heading">= ' . $coming_soon_shortly_value . '</span></div>';
		$coming_soon_shortly_changelog .= str_replace( '<span></span>', '', $coming_soon_shortly_value );
	}
	$coming_soon_shortly_changelog .= '</div>';

	return wp_kses_post( $coming_soon_shortly_changelog );
}

//guidline for about theme
function coming_soon_shortly_mostrar_guide() { 
	//custom function about theme customizer
	$coming_soon_shortly_return = add_query_arg( array()) ;
	$coming_soon_shortly_theme = wp_get_theme( 'coming-soon-shortly' );
	?>
<div class="container-getstarted">
		<div class="inner-side-content1">
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/includes/getstart/images/sticky-header-logo.png" />
			</div>
		    <div class="coupon-container-box-left">
			    <div class="iner-sidebar-pro-btn">
				    <span class="premium-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium Theme', 'coming-soon-shortly'); ?></a>
				    </span>
			    </div>
		    </div>
        </div>					
   <div class="top-head">
	    <div class="top-title">
		     <h2><?php esc_html_e( 'Coming Soon Shortly', 'coming-soon-shortly' ); ?></h2>
		     <h4><?php esc_html_e( 'Welcome to WP Elemento Theme!', 'coming-soon-shortly' ); ?></h4>
		     <p><?php esc_html_e( 'Click on the quick start button to import the demo.', 'coming-soon-shortly' ); ?></p>
			    <div class="iner-sidebar-pro-btn">
					<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
						$coming_soon_shortly_plugin_ins = Coming_Soon_Shortly_Plugin_Activation_WPElemento_Importer::get_instance();
						$coming_soon_shortly_actions = $coming_soon_shortly_plugin_ins->coming_soon_shortly_recommended_actions;
					?>
					<div class="coming-soon-shortly-recommended-plugins ">
						<div class="coming-soon-shortly-action-list">
							<?php if ($coming_soon_shortly_actions): foreach ($coming_soon_shortly_actions as $coming_soon_shortly_key => $coming_soon_shortly_actionValue): ?>
									<div class="coming-soon-shortly-action" id="<?php echo esc_attr($coming_soon_shortly_actionValue['id']);?>">
										<div class="action-inner plugin-activation-redirect">
											<?php echo wp_kses_post($coming_soon_shortly_actionValue['link']); ?>
										</div>
									</div>
								<?php endforeach;
							endif; ?>
						</div>
					</div>
				   <?php }else{ ?>
					<span class="quick-btn">
				    <?php if (isset($_GET['imported']) && $_GET['imported'] == 'true'): ?>
                        <a href="<?php echo esc_url( site_url() ); ?>" target="_blank"><?php esc_html_e('Visit Site', 'coming-soon-shortly'); ?></a>
						<?php
						$coming_soon_shortly_page_id = get_page_id_by_title('Home');
						?>
						<a href="<?php echo esc_url( admin_url('post.php?post=' . $coming_soon_shortly_page_id . '&action=elementor') ); ?>" 
							target="_blank" class="elementor-edit-btn"><?php esc_html_e('Edit With Elementor', 'coming-soon-shortly'); ?>
						</a>
                    <?php else: ?>
                        <a href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'coming-soon-shortly'); ?></a>
                    <?php endif; ?>
					<?php } ?>
				   </span>
				    <span class="premium-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'coming-soon-shortly'); ?></a>
				    </span>
				    <span class="demo-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'coming-soon-shortly'); ?></a>
				    </span>
				    <span class="doc-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle at $79', 'coming-soon-shortly'); ?></a>
				    </span>
			    </div>
            </div>			
		<div class="inner-side-content">
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" />
			</div>
			<div class="top-right">
			  <span class="version"><?php esc_html_e( 'Version', 'coming-soon-shortly' ); ?>: <?php echo esc_html($coming_soon_shortly_theme['Version']);?></span>
		    </div>
		</div>
    </div>
    <div class="inner-cont">
	    <div class="tab-outer-box1">
		   <div class="tab-inner-box">
			   <div class= "bundle-box">
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/includes/getstart/images/bundle.png"/>
				    <h1><?php esc_html_e('ELEMENTOR WORDPRESS THEME BUNDLE', 'coming-soon-shortly'); ?></h1>
			     <div>
				    <p class="product-price"><?php esc_html_e('Price:', 'coming-soon-shortly'); ?>
                        <span class="regular-price"><?php esc_html_e('$1,999.00', 'coming-soon-shortly'); ?></span>
                        <span class="sale-price"><?php esc_html_e('$79.00', 'coming-soon-shortly'); ?></span>
                    </p>
					<p><?php esc_html_e('The Elementor WordPress Theme Bundle offers a stunning collection of 76+ Premium Elementor Themes', 'coming-soon-shortly'); ?></p>
                 </div>
				</div> 
			    <div class="offer-box"> 
				    <div class="offer1-box">
                       <span class="off-text1"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Buy Bundle at 20% Discount', 'coming-soon-shortly'); ?></a></span>
				    </div> 
		        </div>
			</div>	
		</div>	
		<div class="tab-outer-box2">
			<div class="tab-outer-box-2-1">
			  <h3><?php esc_html_e( 'Customizer Setting', 'coming-soon-shortly' ); ?></h3>
			  <div class="lite-theme-inner">
				<div>
					<h3><?php esc_html_e('Theme Customizer', 'coming-soon-shortly'); ?></h3>
					<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'coming-soon-shortly'); ?></p>
					<div class="info-link">
					   <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Open customizer', 'coming-soon-shortly'); ?></a>
					</div>
				</div>
				<div>
					<h3><?php esc_html_e('Help Docs', 'coming-soon-shortly'); ?></h3>
					<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'coming-soon-shortly'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( COMING_SOON_SHORTLY_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'coming-soon-shortly'); ?></a>
					</div>
				</div>
				<div>
					<h3><?php esc_html_e('Need Support?', 'coming-soon-shortly'); ?></h3>
					<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'coming-soon-shortly'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( COMING_SOON_SHORTLY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'coming-soon-shortly'); ?></a>
					</div>
				</div>
				<div>
					<h3><?php esc_html_e('Reviews & Testimonials', 'coming-soon-shortly'); ?></h3>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'coming-soon-shortly'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( COMING_SOON_SHORTLY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'coming-soon-shortly'); ?></a>
					</div>
				</div>
            </div>	
		</div>
			<div class="tab-outer-box-2-2">
			  <h3><?php esc_html_e( 'Link to customizer', 'coming-soon-shortly' ); ?></h3>
				<div class="first-row">
					<div class="row-box">
						<div class="row-box1">
							<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your Website logo','coming-soon-shortly'); ?></a>
						</div>
						<div class="row-box2">
							<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Edit Your Menus','coming-soon-shortly'); ?></a>
						</div>
					</div>
							
					<div class="row-box">
						<div class="row-box1">
							<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Add Header Image','coming-soon-shortly'); ?></a>
						</div>
						<div class="row-box2">
							<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Add Footer Widget','coming-soon-shortly'); ?></a>
						</div>
					</div>
				</div>
            </div>	
			<div class="tab-outer-box-2-3">
				<h3><?php esc_html_e( 'Change log', 'coming-soon-shortly' ); ?></h3>	
		     <?php coming_soon_shortly_changelog_screen(); ?>
          </div>	
        </div>
    </div>
</div>	
<?php } ?>