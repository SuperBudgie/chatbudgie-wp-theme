<?php
/**
 * ChatBudgie theme setup.
 */

function chatbudgie_setup() {
	load_theme_textdomain( 'chatbudgie', get_template_directory() . '/languages' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'chatbudgie' ),
		)
	);
}
add_action( 'after_setup_theme', 'chatbudgie_setup' );
