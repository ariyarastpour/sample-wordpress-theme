<?php

Redux::set_section( $opt_name, array(
    'title'            =>  esc_html__('General', THEME_NAME),
    'id'               => 'general_section',
    'desc'             =>  esc_html__('General settings for site', THEME_NAME),
    'icon'             => 'isax isax-global-edit',
    'fields'           => array(  
        array(
            'id'        => 'site-width',
            'type'      => 'slider',
            'title'     => esc_html__('Site Width', THEME_NAME),
            'subtitle'  => esc_html__('Choose the site width.', THEME_NAME),
            'default'   => 1400,
            'min'       => 1000,
            'step'      => 1,
            'max'       => 1600,
        ),		

        array(
            'id'       => 'smooth-scroll',
            'type'     => 'switch',
            'title'    => esc_html__('Smooth Scroll', THEME_NAME),
            'subtitle' => esc_html__('Smooth scroll in website.', THEME_NAME),
            'desc'     => '',
            'default'  => true,
        ),

        array(
            'id'       => 'site_icon',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__('Site Icon', THEME_NAME),
            'desc'     => esc_html__('Upload or select a site icon.', THEME_NAME),
            'default'  => array(),
        ),

        array(
            'id'       => 'theme-preloader',
            'type'     => 'switch',
            'title'    => esc_html__('Preloader', THEME_NAME),
            'subtitle' => esc_html__('Show site preloader transition before site loaded.', THEME_NAME),
            'desc'     => '',
            'default'  => true,
        ),

        array(
            'id'       => 'theme-preloader-image',
            'type'     => 'media',
            'title'    => __( 'upload image' , THEME_NAME ),
            'desc'     => __( 'upload image png,jpg' , THEME_NAME ),
            'url'      => false,
            'required' => array(
                'theme-preloader-kind', '=', 'custom image',
            )
        ),
    )
) );