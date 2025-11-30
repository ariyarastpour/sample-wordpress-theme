<?php

$cmb = new_cmb2_box( array(
    'id'            => 'theme_profile_meta',
    'title'         => esc_html__('Avatar', THEME_NAME),
    'object_types'  => ['user'],
    'show_names'    => true,
    'new_user_section' => 'add-existing-user',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Extra Info From Theme', THEME_NAME),
    'id'               => 'theme_profile_info',
    'type'             => 'title',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Profile Image', THEME_NAME),
    'id'               => 'profile_image',
    'desc'             => esc_html__( 'Upload square image. 120px*120px', THEME_NAME ),
    'type'             => 'file',
    'query_args' => array( 'type' => 'image' ), 
    'preview_size' => 'thumbnail',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Email Address', THEME_NAME),
    'id'               => 'theme_author_email',
    'type'             => 'text_email',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Website URL', THEME_NAME),
    'id'               => 'theme_author_website',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Facebook URL', THEME_NAME),
    'id'               => 'theme_author_facebook',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Twitter URL', THEME_NAME),
    'id'               => 'theme_author_twitter',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Linkedin URL', THEME_NAME),
    'id'               => 'theme_author_linkedin',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Whatsapp URL', THEME_NAME),
    'id'               => 'theme_author_whatsapp',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Instagram URL', THEME_NAME),
    'id'               => 'theme_author_instagram',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Pinterest URL', THEME_NAME),
    'id'               => 'theme_author_pinterest',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Dribbble URL', THEME_NAME),
    'id'               => 'theme_author_dribbble',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Telegram URL', THEME_NAME),
    'id'               => 'theme_author_telegram',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Youtube URL', THEME_NAME),
    'id'               => 'theme_author_youtube',
    'type'             => 'text_url',
) );

$cmb->add_field( array(
    'name'             => esc_html__('Github URL', THEME_NAME),
    'id'               => 'theme_author_github',
    'type'             => 'text_url',
) );