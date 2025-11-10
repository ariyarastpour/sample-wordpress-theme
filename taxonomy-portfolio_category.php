<?php
/**
 * نمایش دسته‌بندی نمونه کارها
 */
get_header(); ?>
<section class="max-w-6xl mx-auto px-4 py-10">
	<h1 class="text-3xl font-bold text-gray-800 mb-8 border-b-4 border-blue-500 pb-2 text-center">
		<?php single_term_title(); ?>
	</h1>
	<?php if ( have_posts() ) : ?>
	<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
		<?php while ( have_posts() ) :
				the_post(); ?>
		<article class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
			<a href="<?php the_permalink(); ?>" class="block group">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="mb-3 overflow-hidden rounded-lg">
					<?php the_post_thumbnail( 'medium_large', [ 'class' => 'w-full object-cover group-hover:scale-105 transition-transform' ] ); ?>
				</div>
				<?php endif; ?>
				<h2 class="text-xl font-semibold mb-1 group-hover:text-blue-600 transition"><?php the_title(); ?></h2>
			</a>
		</article>
		<?php endwhile; ?>
	</div>
	<div class="mt-10 flex justify-center">
		<?php the_posts_pagination( [ 'mid_size' => 2, 'prev_text' => '« قبلی', 'next_text' => 'بعدی »' ] ); ?></div>
	<?php else : ?>
	<p class="text-center text-gray-600">هیچ مطلبی در این دسته یافت نشد.</p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>