<?php
/**
 * فایل search.php
 * نمایش نتایج جستجو
 */
get_header();
?>
<section class="max-w-6xl mx-auto px-4 py-10">
	<h1 class="text-3xl font-bold text-gray-800 mb-8 text-center border-b-4 border-blue-500 pb-2">
		نتایج جستجو برای: "<?php echo get_search_query(); ?>"
	</h1>

	<?php if ( have_posts() ) : ?>
	<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
		<?php while ( have_posts() ) :
				the_post(); ?>
		<article class="bg-white rounded-2xl shadow hover:shadow-lg transition-shadow duration-300 overflow-hidden">
			<a href="<?php the_permalink(); ?>" class="block group">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="overflow-hidden">
					<?php the_post_thumbnail( 'medium_large', [ 'class' => 'w-full h-56 object-cover group-hover:scale-105 transition-transform duration-300' ] ); ?>
				</div>
				<?php else : ?>
				<div class="w-full h-56 bg-gray-200 flex items-center justify-center text-gray-400 text-sm">بدون تصویر
				</div>
				<?php endif; ?>
				<div class="p-5">
					<h2 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors">
						<?php the_title(); ?></h2>
					<div class="text-sm text-gray-500 mb-3 flex flex-wrap items-center gap-2">
						<span><?php the_time( get_option( 'date_format' ) ); ?></span>
						<span class="text-gray-300">|</span>
						<span><?php the_author(); ?></span>
					</div>
					<div class="text-sm text-gray-600 line-clamp-3 mb-3">
						<?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></div>
					<div class="flex justify-between items-center">
						<span class="text-xs text-gray-500"><?php the_category( ', ' ); ?></span>
						<span class="text-blue-600 text-sm font-medium group-hover:underline">ادامه مطلب →</span>
					</div>
				</div>
			</a>
		</article>
		<?php endwhile; ?>
	</div>
	<div class="mt-10 flex justify-center">
		<?php the_posts_pagination( [
				'mid_size' => 2,
				'prev_text' => '« قبلی',
				'next_text' => 'بعدی »',
			] ); ?>
	</div>
	<?php else : ?>
	<p class="text-center text-gray-600">نتیجه‌ای یافت نشد.</p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>