<?php

Redux::set_section( $opt_name, array(
    'title'       =>  esc_html__('Styling', THEME_NAME),
    'id'          => 'styling_section',
    'desc'        =>  esc_html__('Styling settings', THEME_NAME),
    'icon'        => 'isax isax-receipt-edit4',
    'fields'           => array(  
		array(
			'id'           => 'body-bg',
			'type'         => 'color',
			'transparent'  => false,
			'title'        => esc_html__('Body Background Color', THEME_NAME),
			'subtitle'     => '',
			'desc'         => '',
			'default'      => '',
			'validate'     => 'color'
		),

        array(
			'id'           => 'link-color-hover',
			'type'         => 'color',
			'transparent'  => false,
			'title'        => esc_html__('Links Hover Color', THEME_NAME),
			'subtitle'     => '',
			'desc'         => '',
			'default'      => '',
			'validate'     => 'color',
		),
    )
) );