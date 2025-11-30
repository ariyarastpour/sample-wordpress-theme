<?php

$post_types = get_post_types(array('public' => true), 'objects');
        
// Loop through each post type
foreach ($post_types as $post_type) {
    $cmb = new_cmb2_box( array(
        'id'            => 'theme_side_post_meta_box',
        'title'         => esc_html__('Layout ', THEME_NAME),
        'object_types'  => [$post_type->name],
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Post Hero Layout', THEME_NAME ),
		'id' => 'theme_single_post_layout',
		'type' => 'select',
		'options' => array(
			'0' => esc_html__( 'Default', THEME_NAME ),
			'1' => esc_html__( 'Layout 1', THEME_NAME ),
			'2' => esc_html__( 'Layout 2', THEME_NAME ),
			'3' => esc_html__( 'Layout 3', THEME_NAME ),
			'4' => esc_html__( 'Layout 4', THEME_NAME ),
			'5' => esc_html__( 'Layout 5', THEME_NAME ),
			'6' => esc_html__( 'Layout 6', THEME_NAME ),
			'7' => esc_html__( 'Layout 7', THEME_NAME ),
			'8' => esc_html__( 'Layout 8', THEME_NAME ),
			'9' => esc_html__( 'Layout 9', THEME_NAME ),
			'10' => esc_html__( 'Layout 10', THEME_NAME ),
			'11' => esc_html__( 'Layout 11', THEME_NAME ),
			'12' => esc_html__( 'Layout 12', THEME_NAME ),
			'13' => esc_html__( 'Layout 13', THEME_NAME ),
			'14' => esc_html__( 'Layout 14', THEME_NAME ),
			'15' => esc_html__( 'Layout 15', THEME_NAME ),
			'16' => esc_html__( 'Layout 16', THEME_NAME ),
			'17' => esc_html__( 'Layout 17', THEME_NAME ),
			'18' => esc_html__( 'Layout 18', THEME_NAME ),
			'19' => esc_html__( 'Layout 19', THEME_NAME ),
			'20' => esc_html__( 'Layout 20', THEME_NAME ),
			'21' => esc_html__( 'Layout 21', THEME_NAME ),
			'22' => esc_html__( 'Layout 22', THEME_NAME ),
			'23' => esc_html__( 'Layout 23', THEME_NAME ),
			'24' => esc_html__( 'Layout 24', THEME_NAME ),
			'25' => esc_html__( 'Layout 25', THEME_NAME ),
			'26' => esc_html__( 'Layout 26', THEME_NAME ),
		),
	) );

    $cmb->add_field( array(
        'name'             => esc_html__('Header Type', THEME_NAME),
        'id'               => 'post-header_type',
        'type'             => 'select',
        'options'          => array(
            ''          => esc_html__( 'Default', THEME_NAME ),
            'normal'    => esc_html__( 'Normal', THEME_NAME ),
            'float'     => esc_html__( 'Float', THEME_NAME ),
        ),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Page Layout', THEME_NAME),
        'id'               => 'post-sidebar',
        'type'             => 'select',
        'options'         => array(
            '0'       => esc_html__('Default', THEME_NAME),
            'left' => esc_html__('Left Sidebar', THEME_NAME),
            'right'        => esc_html__('Right Sidebar', THEME_NAME),
            'none'     => esc_html__('No Sidebar', THEME_NAME),
            'none-narrow' => esc_html__('No Sidebar + Narrow Content', THEME_NAME),
            'elementor'     => esc_html__('Elementor Page Builder', THEME_NAME),
        ),
    ) );

        
    $cmb->add_field( array(
        'name'             => esc_html__('Gallery Post Format:', THEME_NAME),
        'id'               => 'post_title_gallery_format',
        'type'             => 'title',
        'desc' => esc_html__('Settings for gallery post format', THEME_NAME),
    ) );

    $cmb->add_field( array(
        'name' => esc_html__('Gallery Images', THEME_NAME),
        'id'   => 'post_single_gallery_images',
        'type' => 'file_list',
        'query_args' => array( 'type' => 'image' ), // Only images attachment
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Video Post Format:', THEME_NAME),
        'id'               => 'post_title_video_format',
        'type'             => 'title',
        'desc'             => esc_html__('Settings for video post format', THEME_NAME),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Video Upload', THEME_NAME),
        'id'               => 'post_single_video_upload',
        'type'             => 'file',
        'desc'             => esc_html__('Upload video file (MP4, MOV, etc.)', THEME_NAME),
        'options'          => array(
            'url' => true, 
        ),
        'query_args'       => array(
            'type' => array(
                'video/mp4',
                'video/quicktime', 
                
            ),
        ),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Audio Post Format:', THEME_NAME),
        'id'               => 'post_title_audio_format',
        'type'             => 'title',
        'desc' => esc_html__('Settings for audio post format', THEME_NAME),
    ) );

    $cmb->add_field( array(
        'name'       => esc_html__( 'Audio File', THEME_NAME ),
        'id'         => 'post_single_audio_file',
        'type'       => 'file',
        'options'    => array(
            'url' => false, // Hide the text input for the URL
        ),
        'query_args' => array(
            'type' => array(
                'audio/mp3',
                'audio/mpeg',
                'audio/wav',
                'audio/x-wav',
                'audio/x-m4a',
                'audio/aac',
                'audio/ogg',
                'audio/x-realaudio',
                'audio/flac',
                'audio/x-ms-wma',
            ),
        ),
        'desc'       => esc_html__( 'Upload the audio file here.', THEME_NAME ),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Quote Post Format:', THEME_NAME),
        'id'               => 'post_title_quote_format',
        'type'             => 'title',
        'desc'             => esc_html__('Settings for quote post format', THEME_NAME),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Quote Author', THEME_NAME),
        'id'               => 'post_single_quote_author',
        'type'             => 'text',
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Quote Content', THEME_NAME),
        'id'               => 'post_single_quote_content',
        'type'             => 'textarea',
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Link Post Format:', THEME_NAME),
        'id'               => 'post_title_link_format',
        'type'             => 'title',
        'desc'             => esc_html__('Settings for link post format', THEME_NAME),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Link URL', THEME_NAME),
        'id'               => 'post_single_link_url',
        'type'             => 'text',
        'desc'             => esc_html__('Eg. https://example.com', THEME_NAME),
    ) );

    $cmb->add_field( array(
        'name'             => esc_html__('Link Title', THEME_NAME),
        'id'               => 'post_single_link_title',
        'type'             => 'text',
    ) );
    
}