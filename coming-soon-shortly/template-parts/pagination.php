<?php if(get_theme_mod('coming_soon_shortly_show_pagination', true )== true): ?>
	<?php
		the_posts_pagination( array(
			'prev_text' => esc_html__( 'Previous page', 'coming-soon-shortly' ),
			'next_text' => esc_html__( 'Next page', 'coming-soon-shortly' ),
		) );
	?>		
<?php endif; ?>