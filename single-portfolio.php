<?php
/**
 * نمایش تکی نمونه کارها
 */
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>
<section class="max-w-4xl mx-auto p-6 bg-white rounded-2xl shadow my-6">
	<h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
	<div class="text-sm text-gray-500 mb-2">
		<span><?php the_time( get_option( 'date_format' ) ); ?></span> |
		<span><?php the_author(); ?></span> |
		<span><?php the_terms( get_the_ID(), 'portfolio_category', '', ', ' ); ?></span>
	</div>
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="mb-4 overflow-hidden rounded-lg">
		<?php the_post_thumbnail( 'large', [ 'class' => 'w-full object-cover' ] ); ?>
	</div>
	<?php endif; ?>
	<div class="text-gray-700"><?php the_content(); ?></div>
</section>
<?php endwhile; endif;
get_footer();