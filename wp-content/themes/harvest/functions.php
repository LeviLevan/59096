<?php
/**
 * Child functions and definitions.
 */
add_filter( 'kava-theme/assets-depends/styles', 'Harvest_styles_depends' );
add_action( 'jet-theme-core/register-config', 'Harvest_core_config' );
add_action( 'init', 'Harvest_plugins_wizard_config', 9 );
add_action( 'tgmpa_register', 'Harvest_register_required_plugins' );
/**
 * Enqueue styles.
 */
function Harvest_styles_depends( $deps ) {
	$parent_handle = 'kava-parent-theme-style';
	wp_register_style(
		$parent_handle,
		get_template_directory_uri() . '/style.css',
		array(),
		kava_theme()->version()
	);
	$deps[] = $parent_handle;
	return $deps;
}
/**
 * Register JetThemeCore config
 *
 * @param  [type] $manager [description]
 * @return [type]          [description]
 */
function Harvest_core_config( $manager ) {
	$manager->register_config(
		array(
			'dashboard_page_name' => esc_html__( 'Harvest', 'Harvest' ),
			'library_button'      => false,
			'menu_icon'           => 'dashicons-admin-generic',
			'api'                 => array( 'enabled' => false ),
			'guide'               => array(
				'title'   => __( 'Learn More About Your Theme', 'jet-theme-core' ),
				'links'   => array(
					'documentation' => array(
						'label'  => __('Check documentation', 'jet-theme-core'),
						'type'   => 'primary',
						'target' => '_blank',
						'icon'   => 'dashicons-welcome-learn-more',
						'desc'   => __( 'Get more info from documentation', 'jet-theme-core' ),
						'url'    => 'http://documentation.zemez.io/wordpress/index.php?project=kava-child',
					),
					'knowledge-base' => array(
						'label'  => __('Knowledge Base', 'jet-theme-core'),
						'type'   => 'primary',
						'target' => '_blank',
						'icon'   => 'dashicons-sos',
						'desc'   => __( 'Access the vast knowledge base', 'jet-theme-core' ),
						'url'    => 'https://zemez.io/wordpress/support/knowledge-base',
					),
				),
			)
		)
	);
}

/**
 * Register Jet Plugins Wizards config
 * @return [type] [description]
 */
function Harvest_plugins_wizard_config() {
	if ( ! is_admin() ) {
		return;
	}
	if ( ! function_exists( 'jet_plugins_wizard_register_config' ) ) {
		return;
	}
	jet_plugins_wizard_register_config( array(
		'license' => array(
			'enabled' => false,
		),
		'plugins' => array(			
			'elementor' => array(
				'name'   => esc_html__( 'Elementor', 'Harvest' ),
				'access' => 'skins',
				),
			'kava-extra' => array(
				'name'   => esc_html__( 'Kava Extra', 'Harvest' ),
				'source' => 'remote',
				'path'   => 'https://github.com/ZemezLab/kava-extra/archive/master.zip',
				'access' => 'base',
				),
			'jet-elements' => array(
				'name'   => esc_html__( 'Jet Elements addon For Elementor', 'Harvest' ),
				'source' => 'local',
				'path'   => get_stylesheet_directory() . '/plugins/jet-elements.zip',
				'access' => 'skins',
				),
			'jet-blocks' => array(
				'name'   => esc_html__( 'Jet Blocks', 'Harvest' ),
				'source' => 'local',
				'path'   => get_stylesheet_directory() . '/plugins/jet-blocks.zip',
				'access' => 'skins',
				),
			'jet-blog' => array(
				'name'   => esc_html__( 'Jet Blog', 'Harvest' ),
				'source' => 'local',
				'path'   => get_stylesheet_directory() . '/plugins/jet-blog.zip',
				'access' => 'skins',
				),
			'jet-tabs' => array(
				'name'   => esc_html__( 'Jet Tabs', 'Harvest' ),
				'source' => 'local',
				'path'   => get_stylesheet_directory() . '/plugins/jet-tabs.zip',
				'access' => 'skins',
				),
			'jet-theme-core' => array(
				'name'   => esc_html__( 'Jet Theme Core', 'Harvest' ),
				'source' => 'local',
				'path'   => get_stylesheet_directory() . '/plugins/jet-theme-core.zip',
				'access' => 'skins',
				),
			'jet-menu' => array(
				'name'   => esc_html__( 'Jet Menu', 'Harvest' ),
				'source' => 'local',
				'path'   => get_stylesheet_directory() . '/plugins/jet-menu.zip',
				'access' => 'skins',
				),
			'contact-form-7' => array(
				'name'   => esc_html__( 'Contact Form 7', 'Harvest' ),
				'access' => 'skins',
				),
			),
		'skins'   => array(
			'base' => array(
				'kava-extra',
				),
			'advanced' => array(
				'default' => array(
					'full'  => array(
						'elementor',
						'jet-blocks',
						'jet-elements',
						'jet-tabs',
						'jet-theme-core',
						'contact-form-7',
						'jet-menu',
						),
					'lite'  => false,
					'demo'  => '',
					'thumb' => get_stylesheet_directory_uri() . '/screenshot.png',
					'name'  => esc_html__( 'Harvest', 'Harvest' ),
					),
				),
			),
		'texts'   => array(
			'theme-name' => esc_html__( 'Harvest', 'Harvest' ),
		)
	) );
}

/**
 * Register Class Tgm Plugin Activation
 */
require_once('inc/classes/class-tgm-plugin-activation.php');
/**
 * Setup Jet Plugins Wizard
 */
function Harvest_register_required_plugins() {
	$plugins = array(
		array(
			'name'         => esc_html__( 'Jet Plugin Wizard', 'Harvest' ),
			'slug'         => 'jet-plugins-wizard',
			'source'       => 'https://github.com/ZemezLab/jet-plugins-wizard/archive/master.zip',
			'external_url' => 'https://github.com/ZemezLab/jet-plugins-wizard',
		),
	);
	$config = array(
		'id'           => 'Harvest',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);
	tgmpa( $plugins, $config );
}

	