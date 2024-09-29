<?php
add_theme_support('post-thumbnails');
function register_tanim_menu() {
  register_nav_menu( 'primary', __( 'Main Menu', 'tanimtheme' ) );

}

add_action( 'after_setup_theme', 'register_tanim_menu' );

function wporg_custom_post_type() {
	register_post_type('tanim_slider',
		array(
			'labels'      => array(
				'name'          => __('Sliders', 'tanimtheme'),
				'singular_name' => __('Slider', 'tanimtheme'),
			),
				'public'      => true,
        'supports' =>array('title' , 'thumbnail')

		)
	);
}

add_action('init', 'wporg_custom_post_type');
/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'tanimtheme' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'tanimtheme' ),
		'before_widget' => '<div class="box"><div class="heading">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

  register_sidebar( array(
		'name'          => __( 'Footer Sidebar-1', 'tanimtheme' ),
		'id'            => 'footer-sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'tanimtheme' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


?>