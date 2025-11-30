<?php

Redux::set_section( $opt_name, array(
    'title'               => esc_html__('blog', THEME_NAME),
    'id'                  => 'blog_section',
    'desc'                => esc_html__('blog settings', THEME_NAME),
    'subsection'          => false,
    'icon'                => 'isax isax-message-text',
    'fields'              => array(
        array(
            'id'          => 'title-g-1',
            'type'        => 'raw',
            'full_width'  => true,
            'content'     => '<h2>' . esc_html__('archives', THEME_NAME) . '</h2>',
        ),

        array(
            'id'          => 'subtitle-g-3',
            'type'        => 'raw',
            'full_width'  => true,
            'content'     => '<h4>' . esc_html__('Archive Title Settings', THEME_NAME) . '</h4>',
        ),

        array(
            'id'        => 'blog-archive-title',
            'type'      => 'checkbox',
            'title'     => esc_html__('show Archive Title Section', THEME_NAME),
            'subtitle'  => '',
            'desc'      => '',
            'default'   => '1'
        ),

        array(
            'id'           => 'blog-archive-title-bg',
            'type'         => 'color',
            'transparent'  => false,
            'title'        => esc_html__('Archive Title Section Background', THEME_NAME),
            'subtitle'     => '',
            'desc'         => '',
            'default'      => '',
            'validate'     => 'color',
            'required'  => array( 'blog-archive-title', '=', '1' ),
        ),

        array(
            'id'           => 'blog-archive-title-color',
            'type'         => 'color',
            'transparent'  => false,
            'title'        => esc_html__('Archive Title Section Color', THEME_NAME),
            'subtitle'     => '',
            'desc'         => '',
            'default'      => '',
            'validate'     => 'color',
            'required'  => array( 'blog-archive-title', '=', '1' ),

        ),

        array(
            'id'        => 'blog-archive-title-radius',
            'type'      => 'checkbox',
            'title'     => esc_html__('Archive Title Section Radius', THEME_NAME),
            'subtitle'  => '',
            'desc'      => '',
            'default'   => '1',
            'required'  => array( 'blog-archive-title', '=', '1' ),
        ),

        array(
            'id'        => 'blog-archive-title-shadow',
            'type'      => 'checkbox',
            'title'     => esc_html__('Archive Title Section Shadow', THEME_NAME),
            'subtitle'  => '',
            'desc'      => '',
            'default'   => '0',
            'required'  => array( 'blog-archive-title', '=', '1' ),

        ),

        array(
            'id'            => 'title-g-4',
            'type'          => 'raw',
            'full_width'    => true,
            'content'       => '<h2>' . esc_html__('singles', THEME_NAME) . '</h2>',
        ),

        array(
            'id'         => 'comments-list-show',
            'type'       => 'switch',
            'title'      => esc_html__('show Comments', THEME_NAME),
            'subtitle'   => esc_html__('show all comments', THEME_NAME),
            'desc'       => '',
            'default'    => true,
        ),

        array(
            'id'        => 'single-post-author-box',
            'type'      => 'switch',
            'title'     => esc_html__('Show Author Box', THEME_NAME),
            'subtitle'  => esc_html__('Show author box in the single post.', THEME_NAME),
            'desc'      => '',
            'default'   => true,
        ),

        array(
            'id'        => 'single-post-next-prev-posts',
            'type'      => 'switch',
            'title'     => esc_html__('Show Next And Previous Posts', THEME_NAME),
            'subtitle'  => esc_html__('Show next and Previous posts in the single post.', THEME_NAME),
            'desc'      => '',
            'default'   => true,
        ),

        array(
            'id'        => 'single-next-prev-posts-title',
            'type'      => 'text',
            'required'  => array( 'single-post-next-prev-posts', '=', '1' ),
            'title'     => esc_html__('Next And Previous Posts Title', THEME_NAME),
            'subtitle'  => esc_html__('Enter your title for the next and Previous posts.', THEME_NAME),
            'desc'      => esc_html__('Default value: Other Articles', THEME_NAME),
        ),

    )
) );
