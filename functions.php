<?php
/**
 * ChatBudgie theme setup.
 */

function chatbudgie_setup() {
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'chatbudgie' ),
		)
	);
}
add_action( 'after_setup_theme', 'chatbudgie_setup' );
