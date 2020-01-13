<?php
// Theme functions

error_reporting(0);

if ( ! function_exists( 'our_setup' ) ) :

function our_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bruessbakery' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	add_theme_support( 'post-thumbnails');

}

endif; // our_setup

add_action( 'after_setup_theme', 'our_setup' );

// Footer Options using customizer
function mytheme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'footer_options' , array(
        'title'      => __( 'Footer Options', 'bruessbakery' ),
        'priority'   => 30,
    ));

    $wp_customize->add_setting( 'address', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control1',
            array(
                'label'      => __( 'Address', 'bruessbakery' ),
                'section'    => 'footer_options',
                'settings'   => 'address',
                'priority'   => 1
            )
        )
    );
    
    $wp_customize->add_setting( 'phone', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control2',
            array(
                'label'      => __( 'Phone', 'bruessbakery' ),
                'section'    => 'footer_options',
                'settings'   => 'phone',
                'priority'   => 1
            )
        )
    );

    $wp_customize->add_setting( 'copyright', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control3',
            array(
                'label'      => __( 'Copyright statement', 'bruessbakery' ),
                'section'    => 'footer_options',
                'settings'   => 'copyright',
                'priority'   => 1
            )
        )
    );
    
}
add_action( 'customize_register', 'mytheme_customize_register' );

/* Cupcakes Custom Post Type */
function cupcakes() {

	$labels = array(
		'name'                  => _x( 'Cupcakes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'cupcake', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cupcakes', 'text_domain' ),
		'name_admin_bar'        => __( 'cupcakes', 'text_domain' ),
		'archives'              => __( 'Cupcakes', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'cupcakes', 'text_domain' ),
		'description'           => __( 'cupcakes Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cupcakes', $args );

}
add_action( 'init', 'cupcakes', 0 );