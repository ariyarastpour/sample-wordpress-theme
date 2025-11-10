<?php
/**
 * فایل page.php
 * نمایش محتوای صفحات
 */
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>
<article class="prose max-w-none mx-auto">
	<h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
	<?php the_content(); ?>
</article>
<?php endwhile; endif;
get_footer();
?>