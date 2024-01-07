<?php
/**
 * Custom hooks
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

add_action( 'understrap_site_info', 'understrap_add_site_info' );
if ( ! function_exists( 'understrap_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a class="text-decoration-none" href="%1$s">%2$s</a><span class="sep mx-1"> | </span> %3$s',
			esc_url( __( 'https://www.grupodentalamos.com/', 'understrap' ) ),
			sprintf(
				/* translators: WordPress */
				esc_html__( '&copy; %s', 'understrap' ),
				'Grupo Dental AMOS'
			),
			sprintf(
				/* translators: 1: Theme name, 2: Theme author */
				esc_html__( 'Site Design: %2$s', 'understrap' ),
				$the_theme->get( 'Name' ), // @phpstan-ignore-line -- theme exists
				'<a class="mx-1" href="' . esc_url( __( 'https://www.olitame.com', 'understrap' ) ) . '">olitame</a>'
			),
			// sprintf(
			// 	/* translators: Theme version */
			// 	esc_html__( 'Version: %s', 'understrap' ),
			// 	$the_theme->get( 'Version' ) // @phpstan-ignore-line -- theme exists
			// )
		);

		// Check if customizer site info has value.
		if ( get_theme_mod( 'understrap_site_info_override' ) ) {
			$site_info = get_theme_mod( 'understrap_site_info_override' );
		}

		echo apply_filters( 'understrap_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
}