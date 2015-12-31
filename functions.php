<?php 
/*
function dividivi_child_scripts() {
	wp_enqueue_scripts( 'extra js', get_template_directory_uri() . '/js/mainav.js' );
}
*/
function dividivi_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'extra js', get_stylesheet_directory_uri() . '/js/mainav.js' );

}

// remove returning customer
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
// check for empty-cart get param to clear the cart
add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
	global $woocommerce;
	
	if ( isset( $_GET['empty-cart'] ) ) {
		$woocommerce->cart->empty_cart(); 
	}
}

add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

	global $woocommerce;
	$woocommerce->cart->empty_cart();

    // Do nothing with the data and return
	return $cart_item_data;
}

add_action('wp_enqueue_scripts', 'dividivi_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),


	));



$args = array(
	'name'          => __( 'Sidebar name', 'theme_text_domain' ),
	'id'            => 'unique-sidebar-id',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar( $args ); 

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
	echo '<section id="main">';
}

function my_theme_wrapper_end() {
	echo '</section>';
}
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}