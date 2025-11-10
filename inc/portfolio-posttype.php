<?php
/**
 * ثبت پست تایپ Portfolio و دسته‌بندی Portfolio Category
 * فایل داخل پوشه inc قرار می‌گیرد
 */

function mytheme_register_portfolio() {
	$labels = [
		'name' => 'نمونه کارها',
		'singular_name' => 'نمونه کار',
		'add_new' => 'افزودن نمونه کار',
		'add_new_item' => 'افزودن نمونه کار جدید',
		'edit_item' => 'ویرایش نمونه کار',
		'all_items' => 'تمام نمونه کارها',
		'view_item' => 'نمایش نمونه کار',
		'search_items' => 'جستجوی نمونه کار',
		'not_found' => 'نمونه کاری یافت نشد',
		'not_found_in_trash' => 'در سطل زباله نمونه کاری یافت نشد',
		'menu_name' => 'نمونه کارها'
	];
	$args = [
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt', 'author' ],
		'rewrite' => [ 'slug' => 'portfolio' ],
		'show_in_rest' => true,
	];
	register_post_type( 'portfolio', $args );

	$taxonomy_labels = [
		'name' => 'دسته بندی نمونه کار',
		'singular_name' => 'دسته نمونه کار',
		'search_items' => 'جستجوی دسته',
		'all_items' => 'تمام دسته‌ها',
		'edit_item' => 'ویرایش دسته',
		'add_new_item' => 'افزودن دسته جدید',
		'menu_name' => 'دسته‌ها',
	];
	$taxonomy_args = [
		'labels' => $taxonomy_labels,
		'hierarchical' => true,
		'public' => true,
		'rewrite' => [ 'slug' => 'portfolio-category' ],
		'show_in_rest' => true,
	];
	register_taxonomy( 'portfolio_category', [ 'portfolio' ], $taxonomy_args );
}
add_action( 'init', 'mytheme_register_portfolio' );