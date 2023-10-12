<?php 
    function DevFolio_setup(){
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'DevFolio' ),
	    	'mini_menu'  => __( 'Mini Menu', 'DevFolio' ),
		) );
        
    }
    add_action('after_setup_theme','DevFolio_setup');
    // Menu Position Option
    function ali_customizar_register($wp_customize){
        $wp_customize->add_section('menu_option', array(
            'title' => __('Menu Position Option', 'AliIbneImran'),
            'description' => 'If you interested to change your menu position you can do it.'
          ));
        
          $wp_customize->add_setting('menu_position', array(
            'default' => 'right_menu',
          ));
        
          $wp_customize-> add_control('menu_position', array(
            'label' => 'Menu Position',
            'description' => 'Select your menu position',
            'setting' => 'menu_position',
            'section' => 'menu_option',
            'type' => 'radio',
            'choices' => array(
              'left_menu' => 'Left Menu',
              'right_menu' => 'Right Menu',
              'center_menu' => 'Center Menu',
            ),
          ));
    }
    add_action('customize_register', 'ali_customizar_register');


    // For Widgets
   
    function DevFolio_register_widgets() {
        register_sidebar( array(
            'name' => __( 'Sidebar Widgets', 'DevFolio'),
            'id' => 'right-sidebar-widget',
            'description' => __( 'A widget area located to the right hand side', 'DevFolio' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-1 Widgets', 'DevFolio'),
            'id' => 'footer-1-widget',
            'description' => __( 'A widget area located to the right hand side', 'DevFolio' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-2 Widgets', 'DevFolio'),
            'id' => 'footer-2-widget',
            'description' => __( 'A widget area located to the right hand side', 'DevFolio' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-3 Widgets', 'DevFolio'),
            'id' => 'footer-3-widget',
            'description' => __( 'A widget area located to the right hand side', 'DevFolio' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
           register_sidebar( array(
            'name' => __( 'Footer-4 Widgets', 'DevFolio'),
            'id' => 'footer-4-widget',
            'description' => __( 'A widget area located to the right hand side', 'DevFolio' ),
             'before_widget' => '<div class="box">',
             'after_widget' => '</div>',
             'before_title' => '<div class="heading">',
             'after_title' => '</div><div class="content">',
           ) );
     
        }       
    add_action( 'widgets_init', 'DevFolio_register_widgets');

    function create_custom_post_type() {

        register_post_type( 'Sliders',
        
            array(
            'labels' => array(
            'name' => __( 'Sliders' ),
            'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'supports' => array( 'title', 'thumbnail')
            )
            );
        }
        
        add_action( 'init', 'create_custom_post_type' );
?>