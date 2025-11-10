<?php
/**
 * فایل footer.php
 * شامل بسته شدن <main> و نمایش فوتر مدرن
 */
?>
</main>
<footer class="bg-gradient-to-b from-gray-900 to-gray-800 text-gray-300 mt-16 pt-10 pb-6">
	<div class="container mx-auto px-4">
		<div class="grid md:grid-cols-3 gap-10 mb-10">
			<!-- درباره سایت -->
			<div>
				<h3 class="text-lg font-semibold text-white mb-3 border-r-4 border-blue-500 pr-2">درباره ما</h3>
				<p class="text-sm leading-relaxed"><?php echo get_bloginfo( 'description' ); ?></p>
			</div>

			<!-- منوی فوتر -->
			<div>
				<h3 class="text-lg font-semibold text-white mb-3 border-r-4 border-blue-500 pr-2">لینک‌های مفید</h3>
				<?php
				if ( has_nav_menu( 'footer_menu' ) ) {
					wp_nav_menu( [
						'theme_location' => 'footer_menu',
						'container' => false,
						'menu_class' => 'flex flex-col gap-2 text-sm',
						'link_before' => '<span class="hover:text-white transition-colors">',
						'link_after' => '</span>',
					] );
				} else {
					echo '<p class="text-sm text-gray-400">منوی فوتر هنوز تنظیم نشده است.</p>';
				}
				?>
			</div>

			<!-- شبکه‌های اجتماعی -->
			<div>
				<h3 class="text-lg font-semibold text-white mb-3 border-r-4 border-blue-500 pr-2">ما را دنبال کنید</h3>
				<div class="flex gap-4 text-xl">
					<a href="#" class="hover:text-blue-400 transition" aria-label="Instagram">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M7 7h10v10H7zM16 3h2a2 2 0 012 2v2M3 16v2a2 2 0 002 2h2" />
						</svg>
					</a>
					<a href="#" class="hover:text-blue-400 transition" aria-label="Twitter">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M8 19c11 0 13-9 13-13 0-.2 0-.4 0-.6A9.3 9.3 0 0023 3a9.7 9.7 0 01-3 1 4.5 4.5 0 00-7.7 4.1A12.9 12.9 0 013 4s-4 9 5 13a13.2 13.2 0 01-8 2c9 5 20 0 20-11.5" />
						</svg>
					</a>
					<a href="#" class="hover:text-blue-400 transition" aria-label="Telegram">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M21 3L9 13l-4-3-4 6 16 5L21 3z" />
						</svg>
					</a>
				</div>
			</div>
		</div>

		<!-- خط جداکننده -->
		<hr class="border-gray-700 mb-6">

		<!-- کپی‌رایت -->
		<div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
			<p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> — تمامی حقوق محفوظ است.</p>
			<nav class="mt-3 md:mt-0">
				<?php
				wp_nav_menu( [
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'flex gap-4 text-gray-400 text-sm',
					'link_before' => '<span class="hover:text-white transition">',
					'link_after' => '</span>',
				] );
				?>
			</nav>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>