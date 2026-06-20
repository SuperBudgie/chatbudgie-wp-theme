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

/**
 * Register footer customization options.
 *
 * @param WP_Customize_Manager $wp_customize Theme customizer object.
 */
function chatbudgie_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'chatbudgie_footer',
		array(
			'title'    => 'Footer',
			'priority' => 130,
		)
	);

	$wp_customize->add_setting(
		'chatbudgie_icp_beian',
		array(
			'default' => '',
		)
	);

	$wp_customize->add_control(
		'chatbudgie_icp_beian',
		array(
			'label'       => 'ICP Beian Info',
			'description' => 'Displayed below the footer copyright.',
			'section'     => 'chatbudgie_footer',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'chatbudgie_customize_register' );
