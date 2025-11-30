<?php
$cmb = new_cmb2_box( array(
    'id'            => 'products',
    'title'         => esc_html__('product attribute', THEME_NAME),
    'object_types'  => ['product'],
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
) );
if(option_value('page-single-product-attribute') ){
    foreach (option_value('page-single-product-attribute') as $index => $item) {
        if(option_value( 'product-attribute-kind-' . esc_html( $item ))){
            $kind = option_value( 'product-attribute-kind-' . esc_html( $item ) );
        }
        else{
            $kind = 'text';
        }
        if($kind == 'image'){
            $type = 'file';
            $query_args = array(
                'type' => array(
                	'image/gif',
                	'image/jpeg',
                	'image/png',
                ),
            );
        }
        if($kind == 'video'){
            $type = 'file';
            $query_args = array(
                'type' => array(
                	'video/mp4',
                	'video/mkv',
                ),
            );
        }
		if ( $kind == 'audio' ) {
			$type = 'file';
			$query_args = array(
				'type' => array(
					'audio/mp3',
                    'audio/mpeg',
                    'audio/wav',
				),
			);
		}
        if($kind == 'text'){
            $type = 'text';
            $query_args = NULL;
        }
        if($kind == 'file'){
            $type = 'file';
			$query_args = NULL;
        }
        $cmb->add_field( array(
            'name'             => esc_html__($item, THEME_NAME),
            'id'               => 'product_' . $index,
            'type'             => $type,
            'query_args'       => $query_args,
            )
        );
    } 
}