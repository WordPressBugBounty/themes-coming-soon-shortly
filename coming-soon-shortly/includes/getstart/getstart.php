<?php
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
		echo wp_kses_post( $coming_soon_shortly_changelog_list );
	}
}

function coming_soon_shortly_parse_changelog( $coming_soon_shortly_content ) {
	$coming_soon_shortly_content = explode ( '== ', $coming_soon_shortly_content );
	$coming_soon_shortly_changelog_isolated = '';
	foreach ( $coming_soon_shortly_content as $key => $coming_soon_shortly_value ) {
		if (strpos( $coming_soon_shortly_value, 'Changelog ==') === 0) {
	    	$coming_soon_shortly_changelog_isolated = str_replace( 'Changelog ==', '', $coming_soon_shortly_value );
	    }
	}
	$coming_soon_shortly_changelog_array = explode( '= ', $coming_soon_shortly_changelog_isolated );
	unset( $coming_soon_shortly_changelog_array[0] );
	$coming_soon_shortly_changelog = '<div class="changelog">';
	foreach ( $coming_soon_shortly_changelog_array as $coming_soon_shortly_value) {
		$coming_soon_shortly_value = preg_replace( '/\n+/', '</span><span>', $coming_soon_shortly_value );
		$coming_soon_shortly_value = '<div class="block"><span class="heading">= ' . $coming_soon_shortly_value . '</span></div><hr>';
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

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Coming Soon Shortly', 'coming-soon-shortly' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'coming-soon-shortly' ); ?>: <?php echo esc_html($coming_soon_shortly_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="coming_soon_shortly_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'coming-soon-shortly' ); ?></button>
				<button class="tablinks" onclick="coming_soon_shortly_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'coming-soon-shortly' ); ?></button>
				<button class="tablinks" onclick="coming_soon_shortly_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'coming-soon-shortly' ); ?></button>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$coming_soon_shortly_plugin_ins = Coming_Soon_Shortly_Plugin_Activation_WPElemento_Importer::get_instance();
					$coming_soon_shortly_actions = $coming_soon_shortly_plugin_ins->coming_soon_shortly_recommended_actions;
					?>
					<div class="coming-soon-shortly-recommended-plugins ">
							<div class="coming-soon-shortly-action-list">
								<?php if ($coming_soon_shortly_actions): foreach ($coming_soon_shortly_actions as $coming_soon_shortly_key => $coming_soon_shortly_actionValue): ?>
										<div class="coming-soon-shortly-action" id="<?php echo esc_attr($coming_soon_shortly_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($coming_soon_shortly_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($coming_soon_shortly_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($coming_soon_shortly_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'coming-soon-shortly'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'coming-soon-shortly'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'coming-soon-shortly'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'coming-soon-shortly'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'coming-soon-shortly'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'coming-soon-shortly'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'coming-soon-shortly'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'coming-soon-shortly'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( COMING_SOON_SHORTLY_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'coming-soon-shortly'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'coming-soon-shortly'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'coming-soon-shortly'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( COMING_SOON_SHORTLY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'coming-soon-shortly'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'coming-soon-shortly'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'coming-soon-shortly'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( COMING_SOON_SHORTLY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'coming-soon-shortly'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'coming-soon-shortly' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','coming-soon-shortly'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','coming-soon-shortly'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','coming-soon-shortly'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','coming-soon-shortly'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php coming_soon_shortly_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'coming-soon-shortly'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Coming Soon Shortly WordPress Theme', 'coming-soon-shortly'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'coming-soon-shortly'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'coming-soon-shortly'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( COMING_SOON_SHORTLY_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'coming-soon-shortly'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'coming-soon-shortly'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'coming-soon-shortly' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'coming-soon-shortly' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'coming-soon-shortly' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'coming-soon-shortly' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'coming-soon-shortly' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'coming-soon-shortly' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'coming-soon-shortly'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( COMING_SOON_SHORTLY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'coming-soon-shortly'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'coming-soon-shortly' ); ?></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>