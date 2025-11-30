<?php

Redux::set_section($opt_name, array(
    'title'            => esc_html__('maitanance mode', THEME_NAME),
    'id'               => 'maitanance-mode',
    'desc'             => esc_html__('just enable maitanance mode and choose your template', THEME_NAME),
    'subsection'       => false,
    'icon'             => 'isax isax-danger',
    'fields'           => array(
        array(
            'id'       => 'enable-maitanance-mode',
            'type'     => 'switch',
            'title'    => esc_html__('maitanance mode', THEME_NAME),
            'subtitle' => esc_html__('enable maitanance mode.', THEME_NAME),
            'desc'     => '',
            'default'  => true,
        ),
    ),
));
