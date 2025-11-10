<?php
/**
 * فایل archive-posttype.php
 * برای نمایش آرشیو نوع پست‌های سفارشی (مثلاً: محصول یا نمونه‌کار)
 */
get_header();
$post_type_obj = get_queried_object();
?>
<section class="container mx-auto px-4 py-10">
	<h1 class="text-3xl font-bold text-center text-gray-800 mb-10 border-b-4 border-blue-500 inline-block pb-2">
		آرشیو: <?php echo esc_html( $post_type_obj->labels->name ); ?>
	</h1>
	<?php if ( have_posts() ) : ?>
		<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
			<?php while ( have_posts() ) :
				the_post(); ?>
				<article
					class="bg-white rounded-2xl shadow hover:shadow-lg overflow-hidden transition-transform duration-300 hover:-translate-y-1 group">
					<!-- تصویر شاخص -->
					<a href="<?php the_permalink(); ?>" class="block relative overflow-hidden">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium_large', [ 'class' => 'w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500' ] ); ?>
						<?php else : ?>
							<img src="<?php echo MYTHEME_URI; ?>/assets/img/no-image.jpg" alt="<?php the_title(); ?>"
								class="w-full h-56 object-cover opacity-80">
						<?php endif; ?>
						<span class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></span>
					</a>
					<!-- محتوا -->
					<div class="p-5 flex flex-col gap-3">
						<h2 class="text-xl font-semibold text-gray-800 group-hover:text-blue-600 transition-colors">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="text-sm text-gray-500 flex flex-wrap gap-3">
							<span class="flex items-center gap-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
									viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
								<?php echo get_the_date(); ?>
							</span>
							<span class="flex items-center gap-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
									viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.788.607 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
								</svg>
								<?php the_author(); ?>
							</span>
						</div>
						<p class="text-gray-600 text-sm leading-relaxed">
							<?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
						</p>
						<div class="flex justify-between items-center mt-3">
							<div class="text-xs text-blue-600">
								<?php the_category( ', ' ); ?>
							</div>
							<a href="<?php the_permalink(); ?>"
								class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center gap-1">
								مشاهده
								<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
									stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</a>
						</div>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
		<?php the_posts_pagination( [
			'mid_size' => 2,
			'prev_text' => '&larr; قبلی',
			'next_text' => 'بعدی &rarr;',
			'class' => 'mt-10 text-center'
		] ); ?>
	<?php else : ?>
		<p class="text-center text-gray-500 mt-10">موردی یافت نشد.</p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>