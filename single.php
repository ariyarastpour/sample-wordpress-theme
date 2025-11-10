<?php
/**
 * فایل single.php
 * برای نمایش یک نوشته تکی
 */
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>
<article class="prose max-w-none mx-auto">
	<h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
	<div class="text-sm text-gray-500 mb-4">منتشر شده در <?php the_time( 'Y/m/d' ); ?></div>
	<?php the_content(); ?>
</article>
<?php endwhile; endif;
get_footer();
?>