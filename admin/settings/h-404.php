<?php

Redux::set_section( $opt_name, array(
    'title'            => esc_html__('Page 404', THEME_NAME),
    'id'               => 'page404_section',
    'desc'             => esc_html__('Page 404 settings', THEME_NAME),
    'subsection'       => false,
    'icon'             => 'isax isax-forbidden-2',
    'fields'           => array(
        array(
            'id'       => 'enable-header-404',
            'type'     => 'switch',
            'title'    => esc_html__('enable header for 404', THEME_NAME),
            'subtitle' => esc_html__('enable header for 404', THEME_NAME),
            'desc'     => '',
            'default'  => true,
        ),

        array(
            'id'       => 'enable-footer-404',
            'type'     => 'switch',
            'title'    => esc_html__('enable footer for 404', THEME_NAME),
            'subtitle' => esc_html__('enable footer for 404.', THEME_NAME),
            'desc'     => '',
            'default'  => true,
        ),

    )
) );