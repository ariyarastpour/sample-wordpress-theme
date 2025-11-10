<?php
/**
 * راه‌اندازی قالب و بارگذاری فایل‌ها
 */
// مسیر قالب
if ( ! defined( 'MYTHEME_DIR' ) ) {
	define( 'MYTHEME_DIR', get_template_directory() );
}

// URL قالب
if ( ! defined( 'MYTHEME_URI' ) ) {
	define( 'MYTHEME_URI', get_template_directory_uri() );
}
// فعال‌سازی پشتیبانی از امکانات قالب
function mytheme_setup() {
	add_theme_support( 'title-tag' ); // تایتل خودکار
	add_theme_support( 'post-thumbnails' ); // تصاویر شاخص
	add_theme_support( 'html5', [ 'search-form', 'gallery', 'caption' ] );
	register_nav_menus( [ 'primary' => 'منوی اصلی' ] );
	register_nav_menus( [ 'footer_menu' => 'منوی فوتر' ] );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

// بارگذاری Tailwind و فایل‌های JS
function mytheme_enqueue_scripts() {
	// استایل اصلی ساخته‌شده با Tailwind CLI
	wp_enqueue_style( 'mytheme-style', MYTHEME_URI . '/dist/css/style.min.css', [], filemtime( MYTHEME_DIR . '/dist/css/style.min.css' ) );
	// اسکریپت اصلی (در صورت نیاز)
	wp_enqueue_script( 'mytheme-script', MYTHEME_URI . '/dist/js/app.js', [], filemtime( MYTHEME_DIR . '/dist/js/app.js' ), true );

	wp_enqueue_script('alpinejs','https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', [], null, true);
}	

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );

// require فایل پست تایپ
require MYTHEME_DIR . '/inc/portfolio-posttype.php';
?>