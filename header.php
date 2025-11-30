<?php
/**
 * فایل header.php
 * نسخه کامل با منو، زیرمنو و فرم جستجو (Tailwind + Alpine.js)
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> x-data="{ mobileMenu: false, showSearch: false }">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		content="<?php echo is_singular() ? wp_strip_all_tags( get_the_excerpt() ) : bloginfo( 'description' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
	<meta property="og:title" content="<?php the_title(); ?>">
	<meta property="og:description" content="<?php echo wp_strip_all_tags( get_the_excerpt() ); ?>">
	<meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>">
	<meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
	<meta property="og:image" content="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>">
	<meta name="twitter:card" content="summary_large_image">
	<?php 
	if(option_value('body-bg')) {
		echo '<style> body { background-color: ' . option_value('body-bg') . '!important;}</style>';
	}
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-gray-50 text-gray-800 antialiased' ); ?>>
	<header class="bg-white/90 backdrop-blur-md shadow-sm sticky top-0 z-50" x-data="{ openDropdown: null }">
		<div class="container mx-auto flex justify-between items-center p-4 gap-4">
			<!-- لوگو -->
			<a href="<?php echo home_url(); ?>" class="flex items-center gap-2 text-2xl font-bold text-blue-600 hover:text-blue-700 transition">
				<?php
					if(option_value('site_icon')){
						$theme_favicon = option_value('site_icon')['url'];
						echo '<img src="' . esc_url($theme_favicon) . '" />';
					}
				?>
				<span><?php bloginfo( 'name' ); ?></span>
			</a>

			<!-- منوی دسکتاپ -->
			<nav class="hidden md:flex items-center gap-8">
				<?php
				wp_nav_menu( [
					'theme_location' => 'primary',
					'container' => false,
					'items_wrap' => '<ul class="flex gap-8 items-center">%3$s</ul>',
					'walker' => new class extends Walker_Nav_Menu {
					function start_lvl( &$output, $depth = 0, $args = null ) {
						$indent = str_repeat( "\t", $depth );
						$output .= "\n$indent<ul class='absolute left-0 w-48 bg-white border border-gray-200 shadow-lg rounded-lg py-2 hidden group-hover:block'>\n";
					}
					function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
						$has_children = in_array( 'menu-item-has-children', $item->classes );
						$class = $has_children ? 'relative group' : '';
						$output .= "<li class='$class'>";
						$output .= '<a href="' . esc_url( $item->url ) . '" class="block px-3 py-2 text-gray-700 hover:text-blue-600 transition">';
						$output .= esc_html( $item->title );
						if ( $has_children ) {
							$output .= ' <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline ml-1 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.585l3.71-3.354a.75.75 0 011.04 1.08l-4.25 3.84a.75.75 0 01-1.04 0l-4.25-3.84a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>';
						}
						$output .= '</a>';
					}
					function end_el( &$output, $item, $depth = 0, $args = null ) {
						$output .= "</li>\n";
					}
					}
				] );
				?>
			</nav>

			<!-- جستجو دسکتاپ -->
			<div class="hidden md:flex items-center relative">
				<button @click="showSearch = !showSearch" class="text-gray-600 hover:text-blue-600 transition">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 16.65z" />
					</svg>
				</button>
				<div x-show="showSearch" @click.away="showSearch = false" x-transition
					class="absolute top-full right-0 mt-2 bg-white rounded-lg shadow-lg p-2 w-64">
					<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex">
						<input type="search" name="s" placeholder="جستجو..."
							class="w-full border border-gray-300 rounded-l-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
						<button type="submit"
							class="bg-blue-600 text-white px-3 rounded-r-lg hover:bg-blue-700 transition">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
								fill="currentColor">
								<path fill-rule="evenodd"
									d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.817-4.817A6 6 0 012 8z"
									clip-rule="evenodd" />
							</svg>
						</button>
					</form>
				</div>
			</div>

			<!-- دکمه تماس -->
			<div class="hidden md:block">
				<a href="<?php echo home_url( '/contact' ); ?>"
					class="bg-blue-600 text-white px-5 py-2 rounded-full shadow hover:bg-blue-700 transition">تماس با
					ما</a>
			</div>

			<!-- دکمه موبایل -->
			<button @click="mobileMenu = !mobileMenu" class="md:hidden text-gray-600 focus:outline-none"
				aria-label="باز کردن منو">
				<svg x-show="!mobileMenu" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
					viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
				</svg>
				<svg x-show="mobileMenu" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
					viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>

		<!-- منوی موبایل -->
		<nav x-show="mobileMenu" x-transition class="md:hidden bg-white border-t border-gray-200 shadow-inner">
			<div class="p-4">
				<!-- جستجوی موبایل -->
				<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex mb-4">
					<input type="search" name="s" placeholder="جستجو..."
						class="w-full border border-gray-300 rounded-l-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
					<button type="submit" class="bg-blue-600 text-white px-3 rounded-r-lg hover:bg-blue-700 transition">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd"
								d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.817-4.817A6 6 0 012 8z"
								clip-rule="evenodd" />
						</svg>
					</button>
				</form>
				<?php
				wp_nav_menu( [
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'flex flex-col gap-2 text-gray-700 font-medium',
				] );
				?>
			</div>
		</nav>
	</header>
	<main class="container mx-auto p-4">