<?php
/**
 * فایل index.php
 * نمایش پست‌ها زمانی که قالب خاصی وجود ندارد
 */
get_header();
if ( have_posts() ) :
	echo '<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">';
	while ( have_posts() ) :
		the_post(); ?>
<article class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
	<a href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() )
					the_post_thumbnail( 'medium', [ 'class' => 'rounded-lg mb-3' ] ); ?>
		<h2 class="text-xl font-semibold mb-2"><?php the_title(); ?></h2>
	</a>
	<p class="text-sm text-gray-500 mb-2"><?php the_time( 'Y/m/d' ); ?></p>
	<p><?php the_excerpt(); ?></p>
</article>
<?php endwhile;
	echo '</div>';
else :
	echo '<p>هیچ نوشته‌ای یافت نشد.</p>';
endif;
get_footer();
?>