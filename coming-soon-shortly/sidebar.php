<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coming Soon Shortly
 */
?>

<div class="sidebar-area">
  <?php if ( ! dynamic_sidebar( 'coming-soon-shortly-sidebar' ) ) : ?>
    <div role="complementary" aria-label="<?php echo esc_attr__( 'sidebar1', 'coming-soon-shortly' ); ?>" id="archives" class="sidebar-widget">
        <h4 class="title" ><?php esc_html_e( 'Archives', 'coming-soon-shortly' ); ?></h4>
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
    </div>
    <div role="complementary" aria-label="<?php echo esc_attr__( 'sidebar2', 'coming-soon-shortly' ); ?>" id="meta" class="sidebar-widget">
        <h4 class="title"><?php esc_html_e( 'Meta', 'coming-soon-shortly' ); ?></h4>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </div>
  <?php endif; // end sidebar widget area ?>
</div>