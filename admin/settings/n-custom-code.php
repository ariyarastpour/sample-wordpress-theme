<?php

Redux::set_section($opt_name, array(
    'title'            => esc_html__('custom code', THEME_NAME),
    'id'               => 'custom-code',
    'desc'             => esc_html__('add your Custom CSS and JS here', THEME_NAME),
    'subsection'       => false,
    'icon'             => 'isax isax-code-14',
    'fields'           => array(
        array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => esc_html__('Custom CSS', THEME_NAME),
            'mode'     => 'css',
            'theme'    => 'chrome',
            'default'  => '',
        ),

        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => esc_html__('Custom JS', THEME_NAME),
            'mode'     => 'javascript',
            'theme'    => 'chrome',
            'default'  => '',
        ),
    ),
));
