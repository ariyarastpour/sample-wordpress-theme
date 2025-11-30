<?php

$cmb = new_cmb2_box( array(
    'id'            => 'theme_category_meta_box',
    'title'         => esc_html__('Category Settings', THEME_NAME),
    'object_types'  => ['term'],
    'taxonomies'       => array( 'product_cat', 'category', 'post_tag' ),
    'show_names'    => true,
    'new_term_section' => true,
) );

$cmb->add_field( array(
    'name'             => esc_html__('Color', THEME_NAME),
    'id'               => 'theme_term_color',
    'type'             => 'colorpicker',
) );
