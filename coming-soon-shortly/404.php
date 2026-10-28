<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Coming Soon Shortly
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php if ( get_theme_mod('coming_soon_shortly_header_page_title' , true)) : ?>
      <h1><?php echo esc_html(get_theme_mod('coming_soon_shortly_page_not_found_title', __('404 Error!', 'coming-soon-shortly'))); ?></h1>
    <?php endif; ?>
    <?php if ( get_theme_mod('coming_soon_shortly_header_breadcrumb' , true)) : ?>
      <div class="crumb-box mt-3">
        <?php coming_soon_shortly_the_breadcrumb(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center not-found-content">
      <p><?php echo esc_html(get_theme_mod('coming_soon_shortly_page_not_found_text', __('The page you are looking for may have been moved, deleted, or possibly never existed.', 'coming-soon-shortly'))); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>