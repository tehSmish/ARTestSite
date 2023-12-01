<?php
function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
            add_action(
            $action,
                function () use ( $kit_url ) {
                    wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
                }
            );
        }
    }
}

fa_custom_setup_kit('https://kit.fontawesome.com/a6f4713d55.js');

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'nav menu'=>'Navigation Bar',
            'footer menu 1'=> 'Footer Bar 1',
            'footer menu 2'=> 'Footer Bar 2',
            'footer menu 3'=> 'Footer Bar 3',
            'footer menu 4'=> 'Footer Bar 4',
            'socal menu' => 'Social Links Menu'
        ));
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


?>